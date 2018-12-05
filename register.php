<?php

if (isset($_POST)) {

	require_once 'includes/conexion.php';
	
	if (!isset($_SESSION)) {
		session_start();
	}

	
	$first_name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name'])  : false;
	$last_name = isset($_POST['last_name']) ? mysqli_real_escape_string($db, $_POST['last_name'])  : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email'])  : false;
	$password = isset($_POST['pwd']) ? mysqli_real_escape_string($db, $_POST['pwd'])  : false;

	//array de errores
	$errors = array();
	
	//Validar 

	if (!empty($first_name) && !is_numeric($first_name) && !preg_match('/[0-9]/', $first_name)) {
		$name_validated = true;
	}else{
		$name_validated = false;
		$errors['name'] = 'El nombre no es válido.';
	}

	if (!empty($last_name) && !is_numeric($last_name) && !preg_match('/[0-9]/', $last_name)) {
		$last_name_validated = true;
	}else{
		$last_name_validated = false;
		$errors['last_name'] = 'El apellido no es válido.';
	}

	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
		$email_validated = true;
	}else{
		$email_validated = false;
		$errors['email'] = 'El correo no es válido.';
	}

	if (!empty($password)) {
		$password_validated = true;
	}else{
		$password_validated = false;
		$errors['password'] = 'La contraseña esta vacía.';
	}

	$save_user = false;
	if (count($errors) == 0 ) {
		//Insertar
		$save_user = true;

		$password_secure = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

		$sql = "INSERT INTO users VALUES (NULL, '$first_name', '$last_name', '$email', '$password_secure', CURDATE())";
		$query = mysqli_query($db, $sql);

		if ($query) {
			$_SESSION['success'] = 'El registro se ha comppletado con exito.';
		}else{
			$_SESSION['errors']['global'] = 'Fallo al guardar usuario';
		}


	}else{
		$_SESSION['errors'] = $errors;
	}
}

header('Location: index.php');