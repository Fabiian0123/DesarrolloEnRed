<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard Estudiante</title>
</head>
<body>
<h1>Haz iniciado como estudiante</h1>
    <h1>Datos Basicos</h1>
    <form metod="POST" action="">
        <label>Tipo de identificación:</label>
        <select>
            <option value="seleccione">Seleccione</option>
            <option value="cc">Cedula de ciudadania</option>
            <option value="ti">Tarjeta de identidad</option>
            <option value="passport">Pasaporte</option>
        </select><br><br>
        <label>Numero De Identificación:</label>
        <input id="in_cc" type="number" minlenght="3" maxlenght="17" required><br><br>
        <label>Nombre:</label>
        <input type="text" required><br><br>
        <label>Apellido:</label>
        <input type="text" required><br><br>
        <label>Email:</label>
        <input type="email" required><br><br>
        <label>Sexo:</label>
        <select>
            <option value="seleccione">Seleccione</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
            <option value="H">Homosexual</option>
            <option value="N">No Binario</option>
            <option value="H">Bisexual</option>
            <option value="p">Pansexual</option>
        </select><br><br>
        <label>Fecha de nacimiento:</label>
        <input type="date" required><br><br>
        <label>Edad:</label>
        <input type="number" minlenght="0" maxlenght="3" required><br><br>
        <label>Direccion:</label>
        <input type="text" required><br><br>
        <label>Barrio:</label>
        <input type="text" required><br><br>
        <label>Telefono:</label>
        <input type="number" minlenght="5" maxlenght="12" required><br><br>
        <input type="submit" class="enviar" value="Enviar" style="cursor:pointer">
        <a href="/Matricular/Matricular.php" type="submit" style="cursor:pointer">Matricular Materias</a>

    </form>

    
</body>
</html>