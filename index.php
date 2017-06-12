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
    <h1>Войдите</h1>
    <p>Пользователь:
        <?php echo (isset($_SESSION['login']) ? $_SESSION['login'] : 'Не выполнен выход' ) ?>
    </p>

    <form method="POST" action="handler.php">
        <label>Логин:</label>
        <input type="text" name="login">

        <label>Пароль:</label>
        <input type="password" name="password">

        <button type="submit">Отправить</button>
    </form>

    <a href="destroy-session.php">Выйти</a>

</body>

</html>