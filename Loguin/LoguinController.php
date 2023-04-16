<?php
  ($_SERVER['REQUEST_METHOD'] == 'POST');
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  $rol = $_POST['rol'];
  
  session_start();
  
  if (isset($_SESSION['rol']) || ($_SESSION['rol'] == 'estudiante' && $_SESSION['rol'] == 'docente')) {
  
    if ($rol == 'docente' && $usuario == 'docente' && $contrasena == '1234') {
      session_start();
      $_SESSION['rol'] = 'docente';
      header('Location: /Docente/Docente.php');
      exit();

    } elseif ($rol == 'estudiante' && $usuario == 'estudiante' && $contrasena == '4321') {
      session_start();
      $_SESSION['rol'] = 'estudiante';
      header('Location: /Estudiante/Estudiante.php');
      exit();

    
  }else {
    
    echo '<script type="text/javascript">
    	alert("Usuario, Contraseña Incorrectos, Especifique Un Rol Valido");
    	window.location.href="/Loguin/Login.php";
    	</script>';
    
    }
  }

?>


