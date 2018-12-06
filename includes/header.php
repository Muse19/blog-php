<?php //require_once 'conexion.php'; ?>

<!doctype html>
<html lang="es">
  <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		
		<!-- ARCHIVOS CSS BOOTSTRAP 4 -->
		<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="assets/css/styles.min.css">
		<link type="text/css" rel="stylesheet" href="assets/css/mdb.min.css">

		<!-- ARCHIVOS CSS PERSONALIZADOS-->
		<link type="text/css" rel="stylesheet" href="assets/css/style.css">
	 

		<title>Blog de Videojuegos</title>
  </head>
  <body>
	
	<!-- NAVBAR -->

	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top ">
		<div class="container">
			<a href="#" class="navbar-brand">
				Blog de Videojuegos
			</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>	
			</button>
			<div class="collapse navbar-collapse" id="menu-principal">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="#" class="nav-link active">Inicio</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Categoría 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Sobre nosotros</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>	

					<?php if (isset($_SESSION['user'])): ?>
						<li class="nav-item"><a href="logout.php" class="nav-link">Cerrar sesión</a></li>	
					<?php endif; ?>

					<?php if (!isset($_SESSION['user'])): ?>
						<li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#darkModalForm">Iniciar sesión</a></li>	

					<?php endif; ?>		
				</ul>	
			</div>
		</div>
	</nav>

	