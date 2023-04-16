<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Iniciar Sesión</h1>
	<form method="post" action="loguinController.php">
		<label>Usuario:</label><br>
		<input type="text" name="usuario" required><br><br>
		<label>Contraseña:</label><br>
		<input type="password" name="contrasena" required><br><br>
		<label>Selecciona Un Rol:</label><br>
		<select name="rol">
            <option value="seleccione">Seleccione</option>
            <option value="estudiante">Estudiante</option>
			<option value="docente">Docente</option>
		</select><br><br>
		<input type="submit" value="Ingresar" style="cursor:pointer">
	</form>
</body>
</html>