<div align="center">

<img src="assets/banner.png" alt="RubikaBotPHP Banner" width="100%">

# RubikaBotPHP

### Professional PHP SDK for Rubika Bot API

A modern, lightweight, PSR-4 compliant PHP SDK for building Rubika bots.

[![PHP Version](https://img.shields.io/badge/PHP-8.1+-777BB4.svg?style=for-the-badge\&logo=php)]()
[![License](https://img.shields.io/github/license/Sobhansgh/Rubikabotphp?style=for-the-badge)]()
[![Latest Release](https://img.shields.io/github/v/release/Sobhansgh/Rubikabotphp?style=for-the-badge)]()
[![Packagist](https://img.shields.io/packagist/v/sobhansgh/rubikabotphp?style=for-the-badge)]()
[![Downloads](https://img.shields.io/packagist/dt/sobhansgh/rubikabotphp?style=for-the-badge)]()
[![Stars](https://img.shields.io/github/stars/Sobhansgh/Rubikabotphp?style=for-the-badge)]()
[![Issues](https://img.shields.io/github/issues/Sobhansgh/Rubikabotphp?style=for-the-badge)]()

---

### 🌍 Documentation

🇺🇸 **English**
~~~~
➡️ **[README_EN.md](README_EN.md)**
~~~~
---

🇮🇷 **فارسی**

➡️ **[README_FA.md](README_FA.md)**

---

</div>

# ✨ Features

* Modern PHP 8.1+
* Composer Ready
* PSR-4 Autoload
* Object Oriented
* Type Safe
* Webhook Support
* Polling Support
* Router
* File Upload
* Keyboard Builder
* Inline Keyboard Builder
* Callback Query
* Exception Handling
* Helper Classes
* Fluent API
* Lightweight
* Open Source

---

# 📦 Installation

```bash
composer require sobhansgh/rubikabotphp
```

---

# 🚀 Quick Example

```php
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Message;

$bot = new Rubika("YOUR_BOT_TOKEN");

$bot->sendMessage(
    Message::make()
        ->chat("CHAT_ID")
        ->text("Hello Rubika!")
);
```

---

# 📁 Project Structure

```
Rubikabotphp/

src/
examples/
docs/
tests/

composer.json

README.md
README_EN.md
README_FA.md

LICENSE

CHANGELOG.md

CONTRIBUTING.md
```

---

# 📚 Examples

Inside the **examples/** directory you will find complete examples for:

* Send Message
* Send Photo
* Send Document
* Send Video
* Send Audio
* Keyboard
* Inline Keyboard
* Router
* Webhook
* Polling

---

# ⚙ Requirements

* PHP 8.1+
* Composer
* CURL Extension
* JSON Extension

---

# 📖 Documentation

Complete documentation is available in:

* README_EN.md
* README_FA.md
* docs/

---

# 🤝 Contributing

Contributions are welcome.

Please read:

```
CONTRIBUTING.md
```

before submitting Pull Requests.

---

# 🧪 Testing

```bash
composer test
```

---

# 🗺 Roadmap

## Version 1.0

* HTTP Client
* Router
* Webhook
* Polling
* File Upload
* Keyboard
* Inline Keyboard
* Helpers
* Examples
* Tests

---

## Version 1.1

* More API Coverage
* Better Validation
* More Helper Classes

---

## Version 2.0

* Middleware
* Events
* Plugins
* Cache Layer
* Async Requests

---

# ❤️ Support

If you like this project please

⭐ Star the repository

🐞 Report bugs

💡 Suggest features

🤝 Contribute

---

# 📄 License

This project is licensed under the MIT License.

See the **LICENSE** file for more information.

---

<div align="center">

Made with ❤️ by

## Sobhan Ghasemi

If this project helps you, please give it a ⭐

</div>
