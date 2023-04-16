<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Docente</title>
</head>
<body>
    <h1>Haz iniciado como docente</h1>
    <h1>Datos Basicos</h1>
    <form metod="POST" action="valid.php">
        <label>Tipo de identificación:</label>
        <select name="tipodni">
            <option value="seleccione">Seleccione</option>
            <option value="cc">Cedula de ciudadania</option>
            <option value="ti">Tarjeta de identidad</option>
            <option value="passport">Pasaporte</option>
        </select><br><br>
        <label>Numero De Identificación:</label>
        <input id="in_cc" type="number"  required><br><br>
        <label>Nombre:</label>
        <input type="text"  minlenght="3" maxlenght="17" required><br><br>
        <label>Apellido:</label>
        <input type="text" required><br><br>
        <label>Email:</label>
        <input type="email" required><br><br>
        <label>Telefono:</label>
        <input type="number" maxlenght="12" minlenght="5" required><br><br>
        <input type="submit" class="enviar" value="Enviar" style="cursor:pointer">
    </form>
    
</body>
</html>