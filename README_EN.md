# RubikaBotPHP

Professional PHP SDK for Rubika Bot API.

RubikaBotPHP is a modern, lightweight and developer-friendly SDK that helps you build Rubika bots using clean, object-oriented PHP.

Designed with simplicity, performance and maintainability in mind.

---

# Features

* PHP 8.1+
* PSR-4 Compatible
* Composer Ready
* Object-Oriented API
* Fluent Builder Pattern
* Webhook Support
* Polling Support
* Router
* Keyboard Builder
* Inline Keyboard Builder
* File Upload Support
* Exception Handling
* Helper Classes
* Type-safe Objects
* Easy to Extend
* MIT License

---

# Requirements

* PHP >= 8.1
* Composer
* cURL Extension
* JSON Extension

---

# Installation

```bash
composer require sobhansgh/rubikabotphp
```

---

# Quick Start

```php
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Message;

$bot = new Rubika("YOUR_BOT_TOKEN");

$bot->sendMessage(
    Message::make()
        ->chat("CHAT_ID")
        ->text("Hello World!")
);
```

---

# Sending Photos

```php
use Sobhansgh\Rubikabotphp\File\InputFile;
use Sobhansgh\Rubikabotphp\Types\Photo;

$bot->sendPhoto(

    Photo::make()

        ->chat("CHAT_ID")

        ->file(
            InputFile::make("photo.jpg")
        )

        ->caption("My Photo")

);
```

---

# Keyboard

```php
$keyboard = Keyboard::make()

    ->row(

        Button::text("Profile"),

        Button::text("Settings")

    )

    ->row(

        Button::text("Help")

    )

    ->build();

$bot->sendMessage(

    Message::make()

        ->chat("CHAT_ID")

        ->text("Select an option")

        ->replyMarkup($keyboard)

);
```

---

# Inline Keyboard

```php
$keyboard = InlineKeyboard::make()

    ->row(

        InlineButton::callback(

            "Yes",

            "yes"

        ),

        InlineButton::callback(

            "No",

            "no"

        )

    )

    ->build();

$bot->sendMessage(

    Message::make()

        ->chat("CHAT_ID")

        ->text("Are you sure?")

        ->replyMarkup($keyboard)

);
```

---

# Webhook

```php
$bot->webhook()->set(

    "https://example.com/webhook.php"

);
```

Receiving Updates

```php
use Sobhansgh\Rubikabotphp\Update\Update;

$update = Update::fromWebhook();

echo $update->text();
```

---

# Polling

```php
$response = $bot->getUpdates();

foreach ($response->get("result") as $item) {

    // ...

}
```

---

# Router

```php
$bot->router()

    ->command("/start", function($update){

        echo "Start";

    })

    ->command("/help", function($update){

        echo "Help";

    })

    ->message(function($update){

        echo $update->text();

    })

    ->callback(function($update){

        echo $update->callbackData();

    })

    ->dispatch(
        Update::fromWebhook()
    );
```

---

# File Upload

```php
InputFile::make("photo.jpg")
```

or

```php
InputFile::fromUrl(
    "https://example.com/image.jpg"
)
```

or

```php
"FILE_ID"
```

---

# Error Handling

```php
try {

    $bot->sendMessage(...);

} catch (ApiException $e) {

    echo $e->getMessage();

}
```

---

# Project Structure

```
src/
│
├── Exceptions/
├── File/
├── Helpers/
├── Http/
├── Keyboard/
├── Router/
├── Types/
├── Update/
├── Webhook/
│
├── Rubika.php

examples/

docs/

tests/

composer.json
```

---

# Examples

The examples directory contains:

* send-message.php
* send-photo.php
* send-document.php
* send-video.php
* send-audio.php
* keyboard.php
* inline-keyboard.php
* webhook.php
* router.php
* polling.php

---

# Documentation

* README_FA.md
* docs/

---

# Testing

Run tests

```bash
composer test
```

---

# Coding Style

This package follows

* PSR-1
* PSR-4
* PSR-12

---

# Contributing

Contributions are welcome.

Please read

```
CONTRIBUTING.md
```

before opening Pull Requests.

---

# Roadmap

## v1.0

* Core SDK
* HTTP Client
* Router
* Webhook
* Polling
* Keyboard
* Inline Keyboard
* File Upload
* Documentation
* Tests

## v1.1

* More Rubika API methods
* Better Validation
* More Helper Classes

## v2.0

* Middleware
* Events
* Plugins
* Cache Layer
* Async Requests

---

# Changelog

See

```
CHANGELOG.md
```

---

# License

MIT License

---

# Author

**Sobhan Ghasemi**

GitHub:

https://github.com/Sobhansgh

---

If you like this project, don't forget to ⭐ the repository.
