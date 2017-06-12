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
    <?php
    if ($_SESSION['role'] < 2) {
	  echo '<h2 class="error">Для доступа к странице необходимы права администратора</h2>';
    } else {
        echo '<h2 class="correct">Добро пожаловать на страницу администратора!</h2>
              <p>Немного эксклюзивного администраторского текста</p>';
    }
  ?>

        <p>Сейчас вы можете:</p>
        <a href="profile.php">Перейти на страницу с личной информацией</a>
        <br>
        <a href="text.php">Перейти на страницу с текстом, который могут видеть только авторизованные пользователи</a>
        <br>
        <a href="profile_edit.php">Перейти на страницу редактирования личной информации</a>
        <br>
        <a href="admins_page.php">Перейти на страницу, доступную только администратору</a>
        <br>
        <a href="destroy-session.php">Выйти</a>
</body>

</html>