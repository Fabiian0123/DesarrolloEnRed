<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricular Materias</title>
</head>
<body>
<h1>Haz iniciado como estudiante</h1>
    <h1>Matricular Materias</h1>
    <form metod="POST" action="valid.php">
        <label>Numero De Identificación:</label>
        <input id="in_cc2" type="number" minlenght="3" maxlenght="17" required><br><br>
        <label>Id de matricula:</label>
        <input id="in_ma" type="number" minlenght="3" maxlenght="17" required><br><br>
        <label>Fecha:</label>
        <input id="in_fe" type="date" required><br><br>
        <label>Codigo de asignatura:</label>
        <input id="in_asign" type="number" minlenght="3" maxlenght="17" required><br><br>
        
        
        
        <input type="submit" class="enviar" value="Matricular" style="cursor:pointer">
    </form>
</body>
</html>