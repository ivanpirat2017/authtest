Конфигурация:
    Apache : 7.2-7.4
    php : 7.4
    PostgreSQL - 14.1
    Open Server - 5.4.1 
Установка:
    composer update
    composer install
    Изменить файл env:
        DB_HOST=127.0.0.1
        DB_PORT=порт
        DB_DATABASE=название базы  
        DB_USERNAME=имя пользователя 
        DB_PASSWORD=пароль
    php artisan migrate 

Контролер находится - app/Http/Controllers/AuthController.php
API - routes/api.php
Web - routes/web.php
Страницы - resources/views
JS - public/js
 
