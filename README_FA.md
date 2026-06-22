# RubikaBotPHP

### SDK حرفه‌ای PHP برای Rubika Bot API

RubikaBotPHP یک کتابخانه متن‌باز، سبک و مدرن برای توسعه ربات‌های روبیکا با زبان PHP است.

هدف این پروژه ارائه یک SDK ساده، روان و حرفه‌ای مشابه TelegramBotPHP است تا توسعه‌دهندگان بتوانند بدون درگیر شدن با درخواست‌های HTTP و جزئیات API، روی منطق ربات خود تمرکز کنند.

---

# امکانات

* پشتیبانی از PHP 8.1 و بالاتر
* نصب با Composer
* معماری PSR-4
* کاملاً شیءگرا (Object Oriented)
* Fluent API
* پشتیبانی از Webhook
* پشتیبانی از Polling
* Router داخلی
* مدیریت Callback
* ساخت Keyboard
* ساخت Inline Keyboard
* ارسال فایل
* مدیریت Exception
* Helper Classes
* ساختار ماژولار
* توسعه آسان
* متن‌باز (MIT)

---

# پیش‌نیازها

* PHP 8.1+
* Composer
* افزونه CURL
* افزونه JSON

---

# نصب

```bash
composer require sobhansgh/rubikabotphp
```

---

# اولین ربات

```php
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Message;

$bot = new Rubika("YOUR_BOT_TOKEN");

$bot->sendMessage(

    Message::make()

        ->chat("CHAT_ID")

        ->text("سلام روبیکا")

);
```

---

# ارسال تصویر

```php
use Sobhansgh\Rubikabotphp\File\InputFile;
use Sobhansgh\Rubikabotphp\Types\Photo;

$bot->sendPhoto(

    Photo::make()

        ->chat("CHAT_ID")

        ->file(

            InputFile::make("photo.jpg")

        )

        ->caption("نمونه تصویر")

);
```

---

# ارسال فایل

```php
$bot->sendDocument(
    ...
);
```

---

# ارسال ویدئو

```php
$bot->sendVideo(
    ...
);
```

---

# ارسال صدا

```php
$bot->sendAudio(
    ...
);
```

---

# ارسال Voice

```php
$bot->sendVoice(
    ...
);
```

---

# ساخت کیبورد

```php
use Sobhansgh\Rubikabotphp\Keyboard\Keyboard;
use Sobhansgh\Rubikabotphp\Keyboard\Button;

$keyboard = Keyboard::make()

    ->row(

        Button::text("ثبت سفارش"),

        Button::text("پروفایل")

    )

    ->row(

        Button::text("راهنما")

    )

    ->build();
```

---

# ارسال پیام همراه کیبورد

```php
$bot->sendMessage(

    Message::make()

        ->chat($chatId)

        ->text("یکی از گزینه‌ها را انتخاب کنید.")

        ->chatKeypad($keyboard)

);
```

---

# Inline Keyboard

```php
use Sobhansgh\Rubikabotphp\Keyboard\InlineKeyboard;
use Sobhansgh\Rubikabotphp\Keyboard\InlineButton;

$keyboard = InlineKeyboard::make()

    ->row(

        InlineButton::callback(

            "تایید",

            "yes"

        ),

        InlineButton::callback(

            "لغو",

            "no"

        )

    )

    ->build();
```

---

# Router

```php
$bot->router()

    ->command("/start", function($update){

        //

    })

    ->command("/help", function($update){

        //

    })

    ->message(function($update){

        //

    })

    ->callback(function($update){

        //

    })

    ->dispatch(

        Update::fromWebhook()

    );
```

---

# Webhook

ثبت Webhook

```php
$bot->webhook()->set(
    "https://example.com/webhook.php"
);
```

دریافت Update

```php
$update = Update::fromWebhook();

echo $update->text();
```

---

# Polling

```php
$response = $bot->getUpdates();
```

---

# ارسال فایل

سه روش پشتیبانی می‌شود.

فایل محلی

```php
InputFile::make("photo.jpg")
```

آدرس اینترنتی

```php
InputFile::fromUrl(
    "https://example.com/photo.jpg"
)
```

شناسه فایل

```php
"FILE_ID"
```

---

# مدیریت خطا

```php
try{

    //

}catch(ApiException $e){

    echo $e->getMessage();

}
```

---

# ساختار پروژه

```text
src/

Exceptions/

Http/

Types/

Helpers/

Keyboard/

Router/

Webhook/

Update/

File/

examples/

docs/

tests/
```

---

# مثال‌ها

پوشه examples شامل نمونه‌های زیر است.

* ارسال پیام
* ارسال تصویر
* ارسال فایل
* ارسال ویدئو
* ارسال صدا
* Webhook
* Polling
* Router
* Keyboard
* Inline Keyboard

---

# تست

```bash
composer test
```

---

# استانداردهای پروژه

این پروژه مطابق استانداردهای زیر توسعه داده شده است.

* PSR-1
* PSR-4
* PSR-12

---

# مشارکت

اگر تمایل به همکاری در توسعه پروژه دارید، لطفاً فایل

CONTRIBUTING.md

را مطالعه کنید.

---

# نقشه راه

## نسخه 1.0

* هسته SDK
* Router
* Webhook
* Polling
* Keyboard
* ارسال فایل
* مستندات
* تست‌ها

---

## نسخه 1.1

* پوشش کامل‌تر API روبیکا
* Helperهای بیشتر
* اعتبارسنجی بهتر

---

## نسخه 2.0

* Middleware
* Event System
* Plugin System
* Cache
* Async Request

---

# تغییرات نسخه‌ها

جزئیات تغییرات هر نسخه در فایل

CHANGELOG.md

قرار می‌گیرد.

---

# مجوز

این پروژه تحت مجوز MIT منتشر می‌شود.

---

# توسعه‌دهنده

**سبحان قاسمی**

اگر این پروژه برای شما مفید بود، لطفاً در GitHub به آن ⭐ Star بدهید تا از ادامه توسعه آن حمایت کنید.
