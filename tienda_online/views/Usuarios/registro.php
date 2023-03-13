<!DOCTYPE html>
<html>
<head>
	<title>Registro y Login de Usuarios</title>
	<!-- Agregar enlaces a los archivos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Agregar estilo personalizado -->
	<style>
		form {
			margin-top: 50px;
			margin-bottom: 50px;
		}

		h1 {
			margin-top: 50px;
			margin-bottom: 50px;
		}

		label {
			font-weight: bold;
		}

		input[type="submit"] {
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Registro de Usuarios</h1>
				<form action="UserController.php?action=register" method="POST">
					<div class="form-group">
						<label>Usuario:</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label>Género:</label>
						<select name="gender" class="form-control">
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
							<option value="O">Otro</option>
						</select>
					</div>
					<div class="form-group">
						<label>Fecha de Nacimiento:</label>
						<input type="date" name="birthdate" class="form-control">
					</div>
					<div class="form-group">
						<label>Dirección:</label>
						<input type="text" name="address" class="form-control">
					</div>
					<div class="form-group">
						<label>Teléfono:</label>
						<input type="text" name="phone" class="form-control">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Contraseña:</label>
						<input type="password" name="password" class="form-control">
					</div>
					<input type="submit" value="Registrarse" class="btn btn-primary">
				</form>
			</div>
			<div class="col-md-6">
				<h1>Iniciar Sesión</h1>
	<form action="UserController.php?action=login" method="POST">
		<div class="form-group">
			<label for="login-email">Email:</label>
			<input type="email" class="form-control" id="login-email" name="email">
		</div>
		<div class="form-group">
			<label for="login-password">Contraseña:</label>
			<input type="password" class="form-control" id="login-password" name="password">
		</div>
		<input type="submit" value="Iniciar Sesión" class="btn btn-primary">
	</form>
</body>
</html>



