<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    <p id="textError"></p>
    <form name="auth_login_form" method="post">
        <input type="text" name="name" id="auth_login_name" placeholder="Имя">
        <input type="text" name="surname" id="auth_login_surname" placeholder="Фамилия">
    </form>
    <button id="auth_login_btn">авторизация</button>
    <br>
    <button onclick="window.open('/api/fc')">Перейти для генерации пользователей</button>
</body>
<script src="./public/js/login.js"></script>

</html>
