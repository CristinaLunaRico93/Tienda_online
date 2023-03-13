<!DOCTYPE html>
<html>
<head>
	<title>Registro y Login de Administradores</title>
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
				<h1>Registro de Administradores</h1>
				<form action="AdminController.php?action=register" method="POST">
					<div class="form-group">
						<label>Código de Empleado:</label>
						<input type="text" name="employee_code" class="form-control">
					</div>
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
						<label>Contraseña:</label>
						<input type="password" name="password" class="form-control">
					</div>
					<input type="submit" value="Registrarse" class="btn btn-primary">
				</form>
			</div>
			<div class="col-md-6">
				<h1>Iniciar Sesión</h1>
				<form action="AdminController.php?action=login" method="POST">
					<div class="form-group">
						<label for="login-username">Usuario:</label>
						<input type="text" class="form-control" id="login-username" name="username">
					</div>
					<div class="form-group">
						<label for="login-password">Contraseña:</label>
						<input type="password" class="form-control" id="login-password" name="password">
					</div>
					<input type="submit" value="Iniciar Sesión" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html>