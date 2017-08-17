<?php 
	require('rb.php');
	
	//aqui es como hacer una tabla con los datos de la BD
	// $connection = mysql_connect('localhost','root','');
	// mysql_select_db('JuegoPokemon');

	// $query = "select * from registro";
	// $result = mysql_query($query);

	// echo "<table>";//aqui comienza a imprimir la tabla

	// while($row = mysql_fetch_array($result)){//recupera los datos como un array
 // 		echo "<tr><td>" . $row['usuario'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['sexo'] . "</td></tr>";
 // 	}

 // 	echo "</table>";//aqui termina de imprimir la tabla
 // 	mysql_close();

	R::setup( 'mysql:host=localhost;dbname=JuegoPokemon', 'root', '' );

	$new_user = R::dispense('registro');

	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	$sexo = $_POST['sexo'];


	// echo 'usuario: ' . $usuario . '<br>';
	// echo 'pass: ' . $pass . '<br>';
	// echo 'sexo: ' . $sexo . '<br>';

	$new_user->usuario = $usuario;
	$new_user->pass = $pass;
	$new_user->pass = $repass;
	$new_user->sexo = $sexo;

	R::store($new_user);
	
	// if(isset($_POST['registrar'])){
	// 	echo("<script type='text/javascript'>prompt('nombre: " . $usuario . "pass: " . $pass . "sexo: " . $gender . "'); </script>");//este sirve para hacer un prompt
	// 	header('Location: http://192.168.64.2/juego pokemon/plataforma.html');
	// }

	if ($_POST['pass']!= $_POST['repass']){
     	echo("Las contraseñas no coinciden");
 	} else {
 		header('Location: http://192.168.64.2/juego pokemon/plataforma.html');
 	}
 ?>