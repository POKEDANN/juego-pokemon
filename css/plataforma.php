<?php 
	ini_set('display_errors', 1);
	error_reporting(E_ERROR);

	$pokeataques = $_GET['ataques'];

	$ataques = array(
		"lucario" => array(
			"ataque1" => "force palm",
			"ataque2" => "bone rush",
			"ataque3" => "aura sphere",
			"ataque4" => "shadow claw"),
		"electivire" => array(
			"ataque1" => "thunder punch",
			"ataque2" => "fire punch",
			"ataque3" => "ice punch",
			"ataque4" => "thunder"),
		);

	echo json_encode($ataques[$pokeataques]);
 ?>