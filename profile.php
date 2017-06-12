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
    <h2 class="correct">Добро пожаловать, уважаемый
        <?php echo $_SESSION['login'] ?>!</h2>
    <br>
    <p>Ваш логин:
        <?php echo $_SESSION['login']?>.</p>
    <p>Ваше имя:
        <?php echo (isset($_POST['firstName']) ? $_SESSION['firstName'] = $_POST['firstName'] : 'пока что не указано.' ) ?>
    </p>
    <p>Ваша фамилия:
        <?php echo (isset($_POST['lastName']) ? $_SESSION['lastName'] = $_POST['lastName'] : 'пока что не указана.' ) ?>
    </p>
    <?php
      if ($_SESSION['role'] > 1) {
        echo '<p>Ваша статус на сайте: администратор.</p>';
      } else {
          echo '<p>Ваша статус на сайте: обычный пользователь.</p>';
      }
      
    ?>

        <p>Сейчас вы можете:</p>
        <a href="text.php">Перейти на страницу с текстом, который могут видеть только авторизованные пользователи</a>
        <br>
        <a href="profile_edit.php">Перейти на страницу редактирования личной информации</a>
        <br>
        <a href="admins_page.php">Перейти на страницу, доступную только администратору</a>
        <br>
        <a href="destroy-session.php">Выйти</a>
</body>

</html>