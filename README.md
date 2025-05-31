# OOP May Project

Простой учебный проект на PHP с REST API и HTML-интерфейсом. Проект использует автозагрузку Composer и написан с использованием объектно-ориентированного подхода.

## 🚀 Как запустить

1. Установи зависимости через Composer:

   ```
   composer install
   ```

2. Запусти PHP сервер:

   ```
   php -S localhost:8000 router.php
   ```

3. Перейди в браузере:
    - Главная страница: [http://localhost:8000](http://localhost:8000)
    
    - Главная страница API: [http://localhost:8000/index.html](http://localhost:8000/index.html)
    - API (получить пользователей): [http://localhost:8000/api/users](http://localhost:8000/api/users)

## 🧱 Структура проекта

```
oop_may/
├── public/
│   ├── index.html        # HTML GUI (форма + список пользователей)
│   └── index.php         # Основной index.php
├── src/
│   └── Api/
│       ├── index.php     # Точка входа для API
│       ├── Request/      # Классы для работы с HTTP-запросами
│       └── Routing/      # Роутинг
├── vendor/               # Папка зависимостей Composer
├── composer.json         # Конфигурация автозагрузки и зависимостей
├── router.php            # Роутер для запуска PHP встроенного сервера
└── README.md             # Этот файл
```

## 🧪 Возможности

- Получение списка пользователей (GET `/api/users`)
- Создание пользователя (POST `/api/users`)
- Простая HTML-форма для взаимодействия с API

## 🛠 Используемое

- PHP (>=8.0)
- Встроенный сервер PHP (`php -S`)
- Composer (PSR-4 автозагрузка)

## 📧 Автор

**kryvbas87**  
[kryvbas87@gmail.com](mailto:kryvbas87@gmail.com)
