<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$input = $_POST['input'];
		if (strlen($input) > 17) {
            echo '<script type="text/javascript">
    	    alert("El valor ingresado no debe exceder los 17 caracteres");
    	    window.location.href="/Docente/Docente.php";
    	    </script>';
		}else {
            echo '<script type="text/javascript">
    	    alert("Enviado Correctamente");
    	    window.location.href="/Docente/Docente.php";
    	    </script>';
        }
	}
	
?>