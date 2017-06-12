<?php
session_start();

$credentials = array(
	'admin' => 'password',
    'login' => 'password'
);



if (isset($_POST['login']) && isset($_POST['password'])) {
	if (isset($credentials[$_POST['login']]) && $credentials[$_POST['login']] == $_POST['password']) {
		$_SESSION['login'] = $_POST['login'];
        $_SESSION['role'] = 1;
          if ($_SESSION['login'] == admin) {
             $_SESSION['role'] = 2;
          }
		header('Location: profile.php');
	} else {
        header('Location: auth_error.php');
		
	}
} else {
	header('Location: index.php');
}