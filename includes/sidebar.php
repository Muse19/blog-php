
<?php require_once 'includes/helpers.php'; ?>

<aside class="col-12 col-md-4">

	<?php if (isset($_SESSION['user'])): ?>

		<div class="card mb-3 p-3">
			<h5>Bienvenido, <?= $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name']; ?> </h5>
		</div>

	<?php endif; ?>

	<div class="card mb-3 p-3">
		<h4 class="">Identificate</h4>

		<?php if (isset($_SESSION['error_login'])): ?>
			<p class="text-danger"> <?= $_SESSION['error_login']; ?> </p>
		<?php endif; ?>

		<form action="login.php" method="POST">
			<div class="form-group">
				<label for="email">Correo:</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label for="pwd">Contreseña:</label>
				<input type="password" class="form-control" name="pwd">
			</div>
			<button type="submit" class="btn btn-primary btn-sm" name="submit">Entrar</button>
		</form>
	</div>

	<div class="card p-3">
		<h4 class="">Registrate</h4>
		<form action="register.php" method="POST">
			<div class="form-group">
				<label for="name">Nombre:</label>
				<input type="text" class="form-control" name="name">
				<?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'name') : ''; ?>
			</div>
			<div class="form-group">
			    <label for="last_name">Apellido:</label>
				<input type="text" class="form-control" name="last_name">
				<?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'last_name') : ''; ?>
			</div>
			<div class="form-group">
				<label for="last_name">Email:</label>
				<input type="email" class="form-control" name="email">
				<?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'email') : ''; ?>
			</div>
			<div class="form-group">
				<label for="pwd">Contreseña:</label>
				<input type="password" class="form-control" name="pwd">
				<?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'pwd') : ''; ?>
			</div>
			<button type="submit" class="btn btn-primary btn-sm" name="submit">Registrar</button>
		</form>
		<?php deleteError(); ?>
	</div>
</aside>
