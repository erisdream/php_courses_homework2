<?php
session_start();
?>

<html>

<head>
    <meta charset="utf-8">
    <title>ДЗ1 Недилько</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h2 class="correct">Добро пожаловать на страницу авторизованных пользователей, уважаемый
        <?php echo $_SESSION['login']?>!</h2>
    <p>Текст для авторизованных пользователей</p>
    <br>
    <a href="profile.php">Вернуться на страницу c личной информацией</a>
    <br>
    <a href="destroy-session.php">Выйти</a>
</body>

</html>