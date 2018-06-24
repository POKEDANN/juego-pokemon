<?php 
session_start();//aqui iniciamos todas las sesiones

	if (isset($_POST['Selecciona'])) {//isset es una validacion para definir variables
		$_SESSION['pokemon'] = $_POST['Selecciona'];
	}

$pokemon = $_SESSION['pokemon'];//aqui guarda los pokemon seleccionados
print_r($_POST);
var_dump($_SESSION['pokemon']);

// header('Location: http://192.168.64.2/juego pokemon/plataforma.php/#seleccionM');
 ?>
