<?php

require_once 'includes/conexion.php';


if (isset($_POST)) {

	if (isset($_SESSION['error_login'])) {
		unset($_SESSION['error_login']);
	}

	$email = trim($_POST['email']);
	$password = $_POST['pwd'];

	$sql = "SELECT * FROM users WHERE email = '$email'";
	$login = mysqli_query($db, $sql);

	if ($login && mysqli_num_rows($login) == 1) {
		$user = mysqli_fetch_assoc($login);
		$verify = password_verify($password, $user['password']);

		if ($verify) {
			$_SESSION['user'] = $user;

		}else{
			$_SESSION['error_login'] = 'Login incorrecto.';
		}

	}else{
		$_SESSION['error_login'] = 'Login incorrecto.';
	}
}

header('Location: index.php');