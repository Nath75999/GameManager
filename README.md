# GameManager

![GitHub stars](https://img.shields.io/github/stars/Nath75999/GameManager?style=for-the-badge&logo=github) ![GitHub forks](https://img.shields.io/github/forks/Nath75999/GameManager?style=for-the-badge&logo=github) ![GitHub issues](https://img.shields.io/github/issues/Nath75999/GameManager?style=for-the-badge&logo=github) ![Last commit](https://img.shields.io/github/last-commit/Nath75999/GameManager?style=for-the-badge&logo=github)

## 📑 Table of Contents

- [Description](#description)
- [Tech Stack](#tech-stack)
- [Quick Start](#quick-start)
- [Project Structure](#project-structure)
- [Contributors](#contributors)
- [Contributing](#contributing)

## 📝 Description

A website for managing games

## 🛠️ Tech Stack

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

**Notable libraries:** Symfony

## ⚡ Quick Start

```bash

# 1. Clone the repository
git clone https://github.com/Nath75999/GameManager.git

# See the Development Setup section below
```

## 📁 Project Structure

```
.
├── assets
│   ├── app.js
│   ├── controllers
│   │   ├── csrf_protection_controller.js
│   │   └── hello_controller.js
│   ├── controllers.json
│   ├── stimulus_bootstrap.js
│   └── styles
│       └── app.css
├── compose.override.yaml
├── compose.yaml
├── composer.json
├── composer.lock
├── config
│   ├── bundles.php
│   ├── packages
│   │   ├── asset_mapper.yaml
│   │   ├── cache.yaml
│   │   ├── csrf.yaml
│   │   ├── debug.yaml
│   │   ├── doctrine.yaml
│   │   ├── doctrine_migrations.yaml
│   │   ├── framework.yaml
│   │   ├── mailer.yaml
│   │   ├── messenger.yaml
│   │   ├── monolog.yaml
│   │   ├── notifier.yaml
│   │   ├── property_info.yaml
│   │   ├── routing.yaml
│   │   ├── security.yaml
│   │   ├── symfonycasts_tailwind.yaml
│   │   ├── translation.yaml
│   │   ├── twig.yaml
│   │   ├── twig_component.yaml
│   │   ├── ux_turbo.yaml
│   │   ├── validator.yaml
│   │   └── web_profiler.yaml
│   ├── preload.php
│   ├── reference.php
│   ├── routes
│   │   ├── easyadmin.yaml
│   │   ├── framework.yaml
│   │   ├── security.yaml
│   │   └── web_profiler.yaml
│   ├── routes.yaml
│   └── services.yaml
├── importmap.php
├── migrations
│   ├── Version20260812170501.php
│   ├── Version20260812190514.php
│   ├── Version20260822011215.php
│   ├── Version20260823151120.php
│   ├── Version20260904132744.php
│   ├── Version20260904141630.php
│   ├── Version20260904142804.php
│   └── Version20260904143737.php
├── phpunit.dist.xml
├── public
│   ├── images
│   │   ├── favicon.ico
│   │   └── logo.png
│   └── index.php
├── src
│   ├── Controller
│   │   ├── Admin
│   │   │   ├── AdminDashBoardController.php
│   │   │   ├── GameCrudController.php
│   │   │   ├── HistoryCrudController.php
│   │   │   └── UserCrudController.php
│   │   ├── BorrowController.php
│   │   ├── ClubController.php
│   │   ├── DetailsController.php
│   │   ├── GamesController.php
│   │   ├── IndexController.php
│   │   ├── LoginController.php
│   │   └── SecurityController.php
│   ├── DataFixtures
│   │   └── AppFixtures.php
│   ├── Entity
│   │   ├── Game.php
│   │   ├── History.php
│   │   └── User.php
│   ├── Kernel.php
│   ├── Repository
│   │   ├── AdminRepository.php
│   │   ├── GameRepository.php
│   │   ├── HistoryRepository.php
│   │   └── UserRepository.php
│   └── Services
│       ├── BorrowServices.php
│       ├── DetailsServices.php
│       └── GameServices.php
├── symfony.lock
├── templates
│   ├── banner.html.twig
│   ├── base.html.twig
│   ├── club
│   │   └── index.html.twig
│   ├── details
│   │   └── index.html.twig
│   ├── games
│   │   └── index.html.twig
│   ├── index
│   │   └── index.html.twig
│   └── security
│       └── login.html.twig
└── tests
    └── bootstrap.php
```

## 👥 Contributors

Thanks to everyone who has contributed to this project:

<p align="left">
<a href="https://github.com/Nath75999" title="Nath75999"><img src="https://avatars.githubusercontent.com/u/149869043?v=4&s=64" width="64" height="64" alt="Nath75999" style="border-radius:50%" /></a>
</p>

[See the full list of contributors →](https://github.com/Nath75999/GameManager/graphs/contributors)

## 👥 Contributing

Contributions are welcome! Here's the standard flow:

1. **Fork** the repository
2. **Clone** your fork: `git clone https://github.com/Nath75999/GameManager.git`
3. **Branch**: `git checkout -b feature/your-feature`
4. **Commit**: `git commit -m 'feat: add some feature'`
5. **Push**: `git push origin feature/your-feature`
6. **Open** a pull request

Please follow the existing code style and include tests for new behavior where applicable.

---

<div align="center">

[![Made with ReadmeBuddy](https://img.shields.io/badge/Made%20with-ReadmeBuddy-8B5CFF?style=for-the-badge&logo=markdown&logoColor=white)](https://readmebuddy.com)

<sub>Generate beautiful READMEs in seconds → <a href="https://readmebuddy.com">readmebuddy.com</a></sub>

</div>
