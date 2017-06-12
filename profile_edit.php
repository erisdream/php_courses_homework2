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
    <h2 class="correct">Добро пожаловать на страницу редактирования личной информации, уважаемый
        <?php echo $_SESSION['login']?>!</h2>
    <br>

    <form method="POST" action="profile.php">
        <label>Введите ваше имя:</label>
        <input type="text" name="firstName">

        <label>Введите вашу фамилию:</label>
        <input type="text" name="lastName">

        <button type="submit">Сохранить</button>
    </form>

    <br>
    <p>Сейчас вы можете:</p>
    <a href="text.php">Перейти на страницу с текстом, который могут видеть только авторизованные пользователи</a>
    <br>
    <a href="profile.php">Перейти на страницу c личной информацией</a>
    <br>
    <a href="destroy-session.php">Выйти</a>
</body>

</html>