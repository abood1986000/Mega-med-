#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import re
import os
import time
import json
import random
import logging
import requests
from bs4 import BeautifulSoup
from telegram import Update, InlineKeyboardButton, InlineKeyboardMarkup
from telegram.ext import Updater, CommandHandler, CallbackQueryHandler, CallbackContext, MessageHandler, Filters

# تكوين السجل
logging.basicConfig(
    format='%(asctime)s - %(name)s - %(levelname)s - %(message)s',
    level=logging.INFO
)
logger = logging.getLogger(__name__)

# مسار ملف JSON لتخزين البريدات الإلكترونية
EMAILS_JSON_FILE = 'emails.json'
USERS_JSON_FILE = 'users.json'

# معرف المشرف (الأدمن) - قم بتغييره إلى معرف تلجرام الخاص بك
ADMIN_ID = 8138907730  # قم بتغيير هذا الرقم إلى معرف تلجرام الخاص بك

# فئة للتفاعل مع موقع mohmal.com
class MohmalAPI:
    def __init__(self, proxy=None):
        self.session = requests.Session()
        self.proxy = proxy
        self.mail = None
        self.headers = {
            'Connection': 'keep-alive',
            'Pragma': 'no-cache',
            'Cache-Control': 'no-cache',
            'Upgrade-Insecure-Requests': '1',
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36',
            'DNT': '1',
            'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
            'Accept-Language': 'ar-SA,ar;q=0.9,en-US;q=0.8,en;q=0.7',
        }
        self.session.headers.update(self.headers)

    def get_domain_list(self):
        """الحصول على قائمة النطاقات المتاحة"""
        try:
            response = self.session.get("https://www.mohmal.com/ar", proxies=self.proxy, allow_redirects=True)
            domains_match = re.compile('<option value="(.+?)"').findall(response.text)
            return domains_match
        except Exception as e:
            logger.error(f"خطأ في الحصول على قائمة النطاقات: {e}")
            return []

    def create_mail(self, name, domain):
        """إنشاء بريد إلكتروني بالاسم والنطاق المحددين"""
        try:
            post_data = {"name": name, "domain": domain}
            create = self.session.post("https://www.mohmal.com/ar/create", data=post_data, proxies=self.proxy, allow_redirects=True)
            verify = create.text.find(name + "@" + domain)
            if verify != -1:
                self.mail = name + "@" + domain
                return name + "@" + domain
            else:
                return None  # لا يمكن إنشاء البريد
        except Exception as e:
            logger.error(f"خطأ في إنشاء البريد: {e}")
            return None

    def create_random_mail(self):
        """إنشاء بريد إلكتروني عشوائي"""
        try:
            lst = self.get_domain_list()
            if len(lst) > 0:
                random_name = ''.join(random.choice('0123456789qwertyuiopasdfghjklzxcvbnm') for i in range(10))
                return self.create_mail(random_name, lst[0])
            else:
                return None  # لا يمكن إنشاء البريد
        except Exception as e:
            logger.error(f"خطأ في إنشاء البريد العشوائي: {e}")
            return None

    def get_messages_list(self):
        """الحصول على قائمة الرسائل"""
        try:
            inbox = self.session.get("https://www.mohmal.com/ar/inbox", proxies=self.proxy, allow_redirects=True)
            soup = BeautifulSoup(inbox.text, 'html.parser')
            messages = []
            
            # البحث عن جدول الرسائل
            message_rows = soup.select('tr[data-msg-id]')
            
            for row in message_rows:
                msg_id = row.get('data-msg-id')
                sender = row.select_one('td:nth-child(1)').text.strip() if row.select_one('td:nth-child(1)') else "غير معروف"
                subject = row.select_one('td:nth-child(3)').text.strip() if row.select_one('td:nth-child(3)') else "بدون موضوع"
                time = row.select_one('td:nth-child(2)').text.strip() if row.select_one('td:nth-child(2)') else ""
                
                messages.append({
                    'id': msg_id,
                    'sender': sender,
                    'subject': subject,
                    'time': time
                })
                
            return messages
        except Exception as e:
            logger.error(f"خطأ في الحصول على قائمة الرسائل: {e}")
            return []

    def get_message(self, msg_id):
        """الحصول على محتوى رسالة محددة"""
        try:
            msg_url = f"https://www.mohmal.com/ar/message/{msg_id}"
            msg = self.session.get(msg_url, proxies=self.proxy, allow_redirects=True)
            soup = BeautifulSoup(msg.text, 'html.parser')
            
            # استخراج محتوى الرسالة
            message_content = soup.select_one('.message-content')
            if message_content:
                # استخراج النص مع الحفاظ على التنسيق
                content = message_content.get_text(separator='\n', strip=True)
                
                # إذا كان المحتوى فارغًا، حاول استخراج HTML
                if not content:
                    content = str(message_content)
                
                return content
            else:
                # محاولة بديلة للعثور على محتوى الرسالة
                body_content = soup.select_one('body')
                if body_content:
                    return body_content.get_text(separator='\n', strip=True)
                return "لا يمكن قراءة محتوى الرسالة"
        except Exception as e:
            logger.error(f"خطأ في الحصول على الرسالة: {e}")
            return f"حدث خطأ أثناء قراءة الرسالة: {str(e)}"

    def extend_mail_time(self):
        """تمديد مدة صلاحية البريد"""
        try:
            extend = self.session.get("https://www.mohmal.com/ar/extend", proxies=self.proxy, allow_redirects=True)
            return "تم تمديد صلاحية البريد" if extend.status_code == 200 else "فشل تمديد صلاحية البريد"
        except Exception as e:
            logger.error(f"خطأ في تمديد صلاحية البريد: {e}")
            return "حدث خطأ أثناء تمديد صلاحية البريد"

    def delete_mail(self):
        """حذف البريد الحالي - طريقة محسنة"""
        try:
            # الحصول على البريد الحالي قبل الحذف
            current_email = self.get_current_email()
            
            # طريقة 1: استخدام رابط الحذف المباشر
            try:
                delete = self.session.get("https://www.mohmal.com/ar/delete", proxies=self.proxy, allow_redirects=True)
                if "تم حذف البريد" in delete.text or delete.status_code == 200:
                    self.mail = None
                    return "تم حذف البريد بنجاح (طريقة 1)"
            except Exception as e:
                logger.error(f"خطأ في طريقة الحذف 1: {e}")
            
            # طريقة 2: محاولة النقر على زر الحذف
            try:
                inbox = self.session.get("https://www.mohmal.com/ar/inbox", proxies=self.proxy, allow_redirects=True)
                soup = BeautifulSoup(inbox.text, 'html.parser')
                delete_button = soup.select_one('a[href="/ar/delete"]')
                
                if delete_button:
                    delete_url = "https://www.mohmal.com" + delete_button['href']
                    delete_response = self.session.get(delete_url, proxies=self.proxy, allow_redirects=True)
                    if delete_response.status_code == 200:
                        self.mail = None
                        return "تم حذف البريد بنجاح (طريقة 2)"
            except Exception as e:
                logger.error(f"خطأ في طريقة الحذف 2: {e}")
            
            # طريقة 3: إنشاء بريد جديد (يحذف البريد القديم تلقائيًا)
            try:
                new_email = self.create_random_mail()
                if new_email:
                    return f"تم حذف البريد القديم وإنشاء بريد جديد: {new_email}"
            except Exception as e:
                logger.error(f"خطأ في طريقة الحذف 3: {e}")
            
            # طريقة 4: تجديد الجلسة وإعادة المحاولة
            try:
                self.session = requests.Session()
                self.session.headers.update(self.headers)
                delete = self.session.get("https://www.mohmal.com/ar/delete", proxies=self.proxy, allow_redirects=True)
                if delete.status_code == 200:
                    self.mail = None
                    return "تم حذف البريد بنجاح (طريقة 4)"
            except Exception as e:
                logger.error(f"خطأ في طريقة الحذف 4: {e}")
            
            return "فشل حذف البريد بجميع الطرق المتاحة. يرجى المحاولة مرة أخرى."
        except Exception as e:
            logger.error(f"خطأ عام في حذف البريد: {e}")
            return "حدث خطأ أثناء حذف البريد"

    def get_current_email(self):
        """الحصول على البريد الحالي"""
        try:
            # إذا كان البريد مخزنًا بالفعل، أعد استخدامه
            if self.mail:
                return self.mail
                
            # محاولة الحصول على البريد من صفحة البريد الوارد
            inbox = self.session.get("https://www.mohmal.com/ar/inbox", proxies=self.proxy, allow_redirects=True)
            soup = BeautifulSoup(inbox.text, 'html.parser')
            
            # البحث عن عنوان البريد الإلكتروني في الصفحة
            email_element = soup.select_one('.email')
            if email_element and email_element.text.strip():
                email = email_element.text.strip()
                self.mail = email
                return email
                
            # محاولة بديلة للعثور على البريد
            email_regex = re.compile(r'[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+')
            email_matches = email_regex.findall(inbox.text)
            
            if email_matches:
                for email in email_matches:
                    if '@' in email and '.' in email:
                        self.mail = email
                        return email
            
            return None
        except Exception as e:
            logger.error(f"خطأ في الحصول على البريد الحالي: {e}")
            return None

# وظائف لإدارة ملف JSON للبريدات
def load_emails_from_json():
    """تحميل البريدات الإلكترونية من ملف JSON"""
    try:
        if os.path.exists(EMAILS_JSON_FILE):
            with open(EMAILS_JSON_FILE, 'r', encoding='utf-8') as f:
                return json.load(f)
        return {"emails": []}
    except Exception as e:
        logger.error(f"خطأ في تحميل البريدات من ملف JSON: {e}")
        return {"emails": []}

def save_email_to_json(email, user_id=None):
    """حفظ بريد إلكتروني في ملف JSON"""
    try:
        data = load_emails_from_json()
        
        # إضافة البريد الإلكتروني مع الوقت والمستخدم
        email_data = {
            "email": email,
            "created_at": time.strftime("%Y-%m-%d %H:%M:%S"),
            "user_id": user_id
        }
        
        # التحقق من عدم وجود البريد مسبقًا
        if email not in [item["email"] for item in data["emails"]]:
            data["emails"].append(email_data)
            
            # حفظ البيانات في الملف
            with open(EMAILS_JSON_FILE, 'w', encoding='utf-8') as f:
                json.dump(data, f, ensure_ascii=False, indent=4)
                
            logger.info(f"تم حفظ البريد {email} في ملف JSON")
            
            # إضافة البريد إلى سجل المستخدم
            if user_id:
                add_email_to_user(user_id, email)
                
            return True
        return False
    except Exception as e:
        logger.error(f"خطأ في حفظ البريد في ملف JSON: {e}")
        return False

def get_all_emails_from_json():
    """الحصول على جميع البريدات الإلكترونية من ملف JSON"""
    data = load_emails_from_json()
    return data["emails"]

# وظائف لإدارة ملف JSON للمستخدمين
def load_users_from_json():
    """تحميل بيانات المستخدمين من ملف JSON"""
    try:
        if os.path.exists(USERS_JSON_FILE):
            with open(USERS_JSON_FILE, 'r', encoding='utf-8') as f:
                return json.load(f)
        return {"users": {}}
    except Exception as e:
        logger.error(f"خطأ في تحميل بيانات المستخدمين من ملف JSON: {e}")
        return {"users": {}}

def save_users_to_json(data):
    """حفظ بيانات المستخدمين في ملف JSON"""
    try:
        with open(USERS_JSON_FILE, 'w', encoding='utf-8') as f:
            json.dump(data, f, ensure_ascii=False, indent=4)
        return True
    except Exception as e:
        logger.error(f"خطأ في حفظ بيانات المستخدمين في ملف JSON: {e}")
        return False

def add_user(user_id, username=None, first_name=None, last_name=None):
    """إضافة مستخدم جديد أو تحديث بيانات مستخدم موجود"""
    try:
        data = load_users_from_json()
        user_id_str = str(user_id)
        
        if user_id_str not in data["users"]:
            data["users"][user_id_str] = {
                "username": username,
                "first_name": first_name,
                "last_name": last_name,
                "joined_at": time.strftime("%Y-%m-%d %H:%M:%S"),
                "emails": []
            }
        else:
            # تحديث بيانات المستخدم إذا تغيرت
            if username:
                data["users"][user_id_str]["username"] = username
            if first_name:
                data["users"][user_id_str]["first_name"] = first_name
            if last_name:
                data["users"][user_id_str]["last_name"] = last_name
                
        save_users_to_json(data)
        return True
    except Exception as e:
        logger.error(f"خطأ في إضافة/تحديث المستخدم: {e}")
        return False

def add_email_to_user(user_id, email):
    """إضافة بريد إلكتروني إلى سجل المستخدم"""
    try:
        data = load_users_from_json()
        user_id_str = str(user_id)
        
        if user_id_str not in data["users"]:
            return False
            
        # إضافة البريد مع الوقت
        email_data = {
            "email": email,
            "created_at": time.strftime("%Y-%m-%d %H:%M:%S")
        }
        
        # التحقق من عدم وجود البريد مسبقًا
        if email not in [item["email"] for item in data["users"][user_id_str]["emails"]]:
            data["users"][user_id_str]["emails"].append(email_data)
            save_users_to_json(data)
            return True
        return False
    except Exception as e:
        logger.error(f"خطأ في إضافة البريد إلى سجل المستخدم: {e}")
        return False

def get_all_users():
    """الحصول على جميع المستخدمين"""
    data = load_users_from_json()
    return data["users"]

def get_user_emails(user_id):
    """الحصول على بريدات مستخدم محدد"""
    data = load_users_from_json()
    user_id_str = str(user_id)
    
    if user_id_str in data["users"]:
        return data["users"][user_id_str]["emails"]
    return []

# قاموس لتخزين جلسات المستخدمين
user_sessions = {}

# دالة بدء البوت
def start(update: Update, context: CallbackContext):
    """إرسال رسالة عند تشغيل الأمر /start"""
    user_id = update.effective_user.id
    username = update.effective_user.username
    first_name = update.effective_user.first_name
    last_name = update.effective_user.last_name
    
    # إضافة المستخدم إلى قاعدة البيانات
    add_user(user_id, username, first_name, last_name)
    
    # إنشاء جلسة جديدة للمستخدم إذا لم تكن موجودة
    if user_id not in user_sessions:
        user_sessions[user_id] = MohmalAPI()
    
    keyboard = [
        [InlineKeyboardButton("إنشاء بريد عشوائي", callback_data='create_random')],
        [InlineKeyboardButton("عرض البريد الحالي", callback_data='show_current')],
        [InlineKeyboardButton("عرض الرسائل", callback_data='show_messages')],
        [InlineKeyboardButton("تمديد صلاحية البريد", callback_data='extend_mail')],
        [InlineKeyboardButton("حذف البريد", callback_data='delete_mail')],
        [InlineKeyboardButton("عرض سجل البريدات", callback_data='show_email_history')]
    ]
    
    # إضافة زر السجلات للمشرف فقط
    if user_id == ADMIN_ID:
        keyboard.append([InlineKeyboardButton("سجلات", callback_data='admin_logs')])
    
    reply_markup = InlineKeyboardMarkup(keyboard)
    
    update.message.reply_text(
        "مرحباً بك في بوت البريد المؤقت! 📧\n"
        "هذا البوت يتيح لك إنشاء بريد إلكتروني مؤقت بشكل مجاني\n"
        "استخدام الأزرار أدناه للتحكم بالبوت:\n\n"
        "تصميم وإنشاء عبود",
        reply_markup=reply_markup
    )

# معالج الاستجابة للأزرار
def button_callback(update: Update, context: CallbackContext):
    """معالجة الضغط على الأزرار"""
    query = update.callback_query
    query.answer()
    
    user_id = query.from_user.id
    
    # التأكد من وجود جلسة للمستخدم
    if user_id not in user_sessions:
        user_sessions[user_id] = MohmalAPI()
    
    mohmal = user_sessions[user_id]
    
    if query.data == 'create_random':
        # إنشاء بريد عشوائي
        query.edit_message_text(text="جاري إنشاء بريد عشوائي...")
        email = mohmal.create_random_mail()
        
        if email:
            # حفظ البريد في ملف JSON
            save_email_to_json(email, user_id)
            
            keyboard = [
                [InlineKeyboardButton("عرض الرسائل", callback_data='show_messages')],
                [InlineKeyboardButton("تمديد صلاحية البريد", callback_data='extend_mail')],
                [InlineKeyboardButton("حذف البريد", callback_data='delete_mail')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                f"✅ تم إنشاء بريد مؤقت بنجاح!\n\n"
                f"📧 البريد: {email}\n\n"
                f"⏱ مدة الصلاحية: 45 دقيقة (يمكن تمديدها)\n"
                f"ℹ️ يمكنك الآن استخدام هذا البريد للتسجيل في المواقع واستقبال الرسائل",
                reply_markup=reply_markup
            )
        else:
            keyboard = [
                [InlineKeyboardButton("المحاولة مرة أخرى", callback_data='create_random')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "❌ فشل إنشاء البريد المؤقت. يرجى المحاولة مرة أخرى.",
                reply_markup=reply_markup
            )
    
    elif query.data == 'show_current':
        # عرض البريد الحالي
        query.edit_message_text(text="جاري البحث عن البريد الحالي...")
        email = mohmal.get_current_email()
        
        if email:
            keyboard = [
                [InlineKeyboardButton("عرض الرسائل", callback_data='show_messages')],
                [InlineKeyboardButton("تمديد صلاحية البريد", callback_data='extend_mail')],
                [InlineKeyboardButton("حذف البريد", callback_data='delete_mail')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                f"📧 البريد الحالي: {email}\n\n"
                f"يمكنك استخدام الأزرار أدناه للتحكم:",
                reply_markup=reply_markup
            )
        else:
            keyboard = [
                [InlineKeyboardButton("إنشاء بريد عشوائي", callback_data='create_random')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "❌ لا يوجد بريد مؤقت حالي. يمكنك إنشاء بريد جديد.",
                reply_markup=reply_markup
            )
    
    elif query.data == 'show_messages':
        # عرض الرسائل
        query.edit_message_text(text="جاري جلب الرسائل...")
        messages = mohmal.get_messages_list()
        
        if messages:
            text = "📬 الرسائل الواردة:\n\n"
            keyboard = []
            
            for i, msg in enumerate(messages):
                text += f"{i+1}. من: {msg['sender']}\n   الموضوع: {msg['subject']}\n   الوقت: {msg['time']}\n\n"
                keyboard.append([InlineKeyboardButton(f"قراءة الرسالة {i+1}", callback_data=f"read_message_{msg['id']}")])
            
            keyboard.append([InlineKeyboardButton("تحديث الرسائل", callback_data='show_messages')])
            keyboard.append([InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')])
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(text=text, reply_markup=reply_markup)
        else:
            keyboard = [
                [InlineKeyboardButton("تحديث الرسائل", callback_data='show_messages')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "📭 لا توجد رسائل واردة حالياً.",
                reply_markup=reply_markup
            )
    
    elif query.data.startswith('read_message_'):
        # قراءة رسالة محددة
        msg_id = query.data.split('_')[2]
        query.edit_message_text(text="جاري قراءة الرسالة...")
        
        message_content = mohmal.get_message(msg_id)
        
        keyboard = [
            [InlineKeyboardButton("العودة للرسائل", callback_data='show_messages')],
            [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
        ]
        reply_markup = InlineKeyboardMarkup(keyboard)
        
        # تقسيم الرسالة إذا كانت طويلة جدًا
        if len(message_content) > 4000:
            parts = [message_content[i:i+4000] for i in range(0, len(message_content), 4000)]
            query.edit_message_text(
                f"📩 محتوى الرسالة (جزء 1 من {len(parts)}):\n\n{parts[0]}",
                reply_markup=reply_markup
            )
            
            # إرسال الأجزاء المتبقية كرسائل منفصلة
            for i, part in enumerate(parts[1:], 2):
                context.bot.send_message(
                    chat_id=query.message.chat_id,
                    text=f"📩 محتوى الرسالة (جزء {i} من {len(parts)}):\n\n{part}"
                )
        else:
            query.edit_message_text(
                f"📩 محتوى الرسالة:\n\n{message_content}",
                reply_markup=reply_markup
            )
    
    elif query.data == 'extend_mail':
        # تمديد صلاحية البريد
        result = mohmal.extend_mail_time()
        
        keyboard = [
            [InlineKeyboardButton("عرض الرسائل", callback_data='show_messages')],
            [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
        ]
        reply_markup = InlineKeyboardMarkup(keyboard)
        
        query.edit_message_text(
            f"⏱ {result}",
            reply_markup=reply_markup
        )
    
    elif query.data == 'delete_mail':
        # حذف البريد
        query.edit_message_text(text="جاري حذف البريد...")
        result = mohmal.delete_mail()
        
        keyboard = [
            [InlineKeyboardButton("إنشاء بريد جديد", callback_data='create_random')],
            [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
        ]
        reply_markup = InlineKeyboardMarkup(keyboard)
        
        query.edit_message_text(
            f"🗑️ {result}",
            reply_markup=reply_markup
        )
    
    elif query.data == 'show_email_history':
        # عرض سجل البريدات
        emails = get_user_emails(user_id)
        
        if emails:
            text = "📋 سجل البريدات الإلكترونية:\n\n"
            
            for i, email_data in enumerate(emails, 1):
                email = email_data.get("email", "غير معروف")
                created_at = email_data.get("created_at", "غير معروف")
                text += f"{i}. {email}\n   تاريخ الإنشاء: {created_at}\n\n"
            
            keyboard = [
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            # تقسيم الرسالة إذا كانت طويلة جدًا
            if len(text) > 4000:
                parts = [text[i:i+4000] for i in range(0, len(text), 4000)]
                query.edit_message_text(
                    f"{parts[0]}\n(جزء 1 من {len(parts)})",
                    reply_markup=reply_markup
                )
                
                # إرسال الأجزاء المتبقية كرسائل منفصلة
                for i, part in enumerate(parts[1:], 2):
                    context.bot.send_message(
                        chat_id=query.message.chat_id,
                        text=f"{part}\n(جزء {i} من {len(parts)})"
                    )
            else:
                query.edit_message_text(text=text, reply_markup=reply_markup)
        else:
            keyboard = [
                [InlineKeyboardButton("إنشاء بريد عشوائي", callback_data='create_random')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "📭 لا توجد بريدات مسجلة حتى الآن.",
                reply_markup=reply_markup
            )
    
    elif query.data == 'admin_logs' and user_id == ADMIN_ID:
        # عرض سجلات المشرف
        query.edit_message_text(text="جاري تحميل سجلات المستخدمين...")
        
        users = get_all_users()
        
        if users:
            text = "👥 سجلات المستخدمين:\n\n"
            
            for user_id_str, user_data in users.items():
                username = user_data.get("username", "غير معروف")
                first_name = user_data.get("first_name", "")
                last_name = user_data.get("last_name", "")
                joined_at = user_data.get("joined_at", "غير معروف")
                emails = user_data.get("emails", [])
                
                full_name = f"{first_name} {last_name}".strip()
                user_display = f"@{username}" if username else full_name if full_name else "مستخدم بدون اسم"
                
                text += f"👤 المستخدم: {user_display} (ID: {user_id_str})\n"
                text += f"📅 تاريخ الانضمام: {joined_at}\n"
                text += f"📧 عدد البريدات: {len(emails)}\n\n"
                
                if emails:
                    text += "البريدات:\n"
                    for i, email_data in enumerate(emails[:5], 1):  # عرض أول 5 بريدات فقط
                        email = email_data.get("email", "غير معروف")
                        created_at = email_data.get("created_at", "غير معروف")
                        text += f"  {i}. {email} ({created_at})\n"
                    
                    if len(emails) > 5:
                        text += f"  ... و{len(emails) - 5} بريدات أخرى\n"
                    
                text += "\n" + "-" * 30 + "\n\n"
            
            keyboard = [
                [InlineKeyboardButton("عرض تفاصيل المستخدمين", callback_data='admin_user_details')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            # تقسيم الرسالة إذا كانت طويلة جدًا
            if len(text) > 4000:
                parts = [text[i:i+4000] for i in range(0, len(text), 4000)]
                query.edit_message_text(
                    f"{parts[0]}\n(جزء 1 من {len(parts)})",
                    reply_markup=reply_markup
                )
                
                # إرسال الأجزاء المتبقية كرسائل منفصلة
                for i, part in enumerate(parts[1:], 2):
                    context.bot.send_message(
                        chat_id=query.message.chat_id,
                        text=f"{part}\n(جزء {i} من {len(parts)})"
                    )
            else:
                query.edit_message_text(text=text, reply_markup=reply_markup)
        else:
            keyboard = [
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "📭 لا يوجد مستخدمين مسجلين حتى الآن.",
                reply_markup=reply_markup
            )
    
    elif query.data == 'admin_user_details' and user_id == ADMIN_ID:
        # عرض تفاصيل المستخدمين للمشرف
        users = get_all_users()
        
        if users:
            # إنشاء أزرار لكل مستخدم
            keyboard = []
            
            for user_id_str, user_data in users.items():
                username = user_data.get("username", "غير معروف")
                first_name = user_data.get("first_name", "")
                last_name = user_data.get("last_name", "")
                
                full_name = f"{first_name} {last_name}".strip()
                user_display = f"@{username}" if username else full_name if full_name else f"المستخدم {user_id_str}"
                
                keyboard.append([InlineKeyboardButton(f"{user_display}", callback_data=f"admin_view_user_{user_id_str}")])
            
            keyboard.append([InlineKeyboardButton("العودة للسجلات", callback_data='admin_logs')])
            keyboard.append([InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')])
            
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "👥 اختر مستخدم لعرض التفاصيل:",
                reply_markup=reply_markup
            )
        else:
            keyboard = [
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "📭 لا يوجد مستخدمين مسجلين حتى الآن.",
                reply_markup=reply_markup
            )
    
    elif query.data.startswith('admin_view_user_') and user_id == ADMIN_ID:
        # عرض تفاصيل مستخدم محدد للمشرف
        target_user_id = query.data.split('_')[3]
        users = get_all_users()
        
        if target_user_id in users:
            user_data = users[target_user_id]
            username = user_data.get("username", "غير معروف")
            first_name = user_data.get("first_name", "")
            last_name = user_data.get("last_name", "")
            joined_at = user_data.get("joined_at", "غير معروف")
            emails = user_data.get("emails", [])
            
            full_name = f"{first_name} {last_name}".strip()
            user_display = f"@{username}" if username else full_name if full_name else "مستخدم بدون اسم"
            
            text = f"👤 تفاصيل المستخدم: {user_display}\n\n"
            text += f"🆔 معرف المستخدم: {target_user_id}\n"
            text += f"👤 اسم المستخدم: {username if username else 'غير متوفر'}\n"
            text += f"📝 الاسم الأول: {first_name if first_name else 'غير متوفر'}\n"
            text += f"📝 الاسم الأخير: {last_name if last_name else 'غير متوفر'}\n"
            text += f"📅 تاريخ الانضمام: {joined_at}\n"
            text += f"📧 عدد البريدات: {len(emails)}\n\n"
            
            if emails:
                text += "📧 البريدات:\n\n"
                for i, email_data in enumerate(emails, 1):
                    email = email_data.get("email", "غير معروف")
                    created_at = email_data.get("created_at", "غير معروف")
                    text += f"{i}. {email}\n   تاريخ الإنشاء: {created_at}\n\n"
            
            keyboard = [
                [InlineKeyboardButton("العودة لقائمة المستخدمين", callback_data='admin_user_details')],
                [InlineKeyboardButton("العودة للسجلات", callback_data='admin_logs')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            # تقسيم الرسالة إذا كانت طويلة جدًا
            if len(text) > 4000:
                parts = [text[i:i+4000] for i in range(0, len(text), 4000)]
                query.edit_message_text(
                    f"{parts[0]}\n(جزء 1 من {len(parts)})",
                    reply_markup=reply_markup
                )
                
                # إرسال الأجزاء المتبقية كرسائل منفصلة
                for i, part in enumerate(parts[1:], 2):
                    context.bot.send_message(
                        chat_id=query.message.chat_id,
                        text=f"{part}\n(جزء {i} من {len(parts)})"
                    )
            else:
                query.edit_message_text(text=text, reply_markup=reply_markup)
        else:
            keyboard = [
                [InlineKeyboardButton("العودة لقائمة المستخدمين", callback_data='admin_user_details')],
                [InlineKeyboardButton("العودة للقائمة الرئيسية", callback_data='main_menu')]
            ]
            reply_markup = InlineKeyboardMarkup(keyboard)
            
            query.edit_message_text(
                "❌ المستخدم غير موجود.",
                reply_markup=reply_markup
            )
    
    elif query.data == 'main_menu':
        # العودة للقائمة الرئيسية
        keyboard = [
            [InlineKeyboardButton("إنشاء بريد عشوائي", callback_data='create_random')],
            [InlineKeyboardButton("عرض البريد الحالي", callback_data='show_current')],
            [InlineKeyboardButton("عرض الرسائل", callback_data='show_messages')],
            [InlineKeyboardButton("تمديد صلاحية البريد", callback_data='extend_mail')],
            [InlineKeyboardButton("حذف البريد", callback_data='delete_mail')],
            [InlineKeyboardButton("عرض سجل البريدات", callback_data='show_email_history')]
        ]
        
        # إضافة زر السجلات للمشرف فقط
        if user_id == ADMIN_ID:
            keyboard.append([InlineKeyboardButton("سجلات", callback_data='admin_logs')])
        
        reply_markup = InlineKeyboardMarkup(keyboard)
        
        query.edit_message_text(
            "مرحباً بك في بوت البريد المؤقت! 📧\n"
            "هذا البوت يتيح لك إنشاء بريد إلكتروني مؤقت بشكل مجاني\n"
            "استخدام الأزرار أدناه للتحكم بالبوت:\n\n"
            "تصميم وإنشاء عبود",
            reply_markup=reply_markup
        )

# دالة المساعدة
def help_command(update: Update, context: CallbackContext):
    """إرسال رسالة عند تشغيل الأمر /help"""
    help_text = (
        "🔍 *دليل استخدام بوت البريد المؤقت* 🔍\n\n"
        "*الأوامر المتاحة:*\n"
        "/start - بدء استخدام البوت\n"
        "/help - عرض هذه المساعدة\n\n"
        "*الوظائف المتاحة:*\n"
        "• إنشاء بريد إلكتروني مؤقت عشوائي\n"
        "• عرض البريد الحالي\n"
        "• عرض الرسائل الواردة\n"
        "• قراءة محتوى الرسائل\n"
        "• تمديد صلاحية البريد\n"
        "• حذف البريد\n"
        "• عرض سجل البريدات المستخدمة\n\n"
        "*كيفية الاستخدام:*\n"
        "1. اضغط على زر 'إنشاء بريد عشوائي' للحصول على بريد مؤقت\n"
        "2. استخدم البريد للتسجيل في الموقع الذي تريده\n"
        "3. اضغط على 'عرض الرسائل' للتحقق من وصول رسائل جديدة\n"
        "4. اضغط على 'قراءة الرسالة' لعرض محتوى الرسالة\n"
        "5. يمكنك تمديد صلاحية البريد إذا كنت بحاجة لمزيد من الوقت\n"
        "6. عند الانتهاء، يمكنك حذف البريد أو تركه ليحذف تلقائياً بعد انتهاء مدة الصلاحية\n"
        "7. يمكنك عرض سجل البريدات التي استخدمتها سابقاً\n\n"
        "ملاحظة: مدة صلاحية البريد المؤقت هي 45 دقيقة، ويمكن تمديدها عند الحاجة.\n\n"
        "تصميم وإنشاء عبود"
    )
    
    update.message.reply_text(help_text, parse_mode='Markdown')

# معالج الرسائل غير المعروفة
def unknown(update: Update, context: CallbackContext):
    """الرد على الرسائل غير المعروفة"""
    update.message.reply_text(
        "🤔 عذراً، لم أفهم هذا الأمر. يرجى استخدام /start لبدء استخدام البوت أو /help للمساعدة."
    )

def main():
    """تشغيل البوت"""
    # إدخال توكن البوت الخاص بك هنا
    TOKEN = "7995013688:AAGJQvc0VYsoM8mvb67z0E0NHyR4Vo_Mcw8"
    
    # إنشاء التطبيق
    updater = Updater(TOKEN)
    
    # الحصول على المرسل
    dispatcher = updater.dispatcher
    
    # إضافة المعالجات
    dispatcher.add_handler(CommandHandler("start", start))
    dispatcher.add_handler(CommandHandler("help", help_command))
    dispatcher.add_handler(CallbackQueryHandler(button_callback))
    
    # معالج للرسائل غير المعروفة
    dispatcher.add_handler(MessageHandler(Filters.text & ~Filters.command, unknown))
    
    # بدء البوت
    updater.start_polling()
    updater.idle()

if __name__ == '__main__':
    main()
