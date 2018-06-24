<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR);//esto ayuda a que te enseñe los errores de php que tienes, tambien puedes ponerle E_ALL
$pkx = array(
	"Pikachu" => array (
		"ataques" => array (
			"ataque1" => "Thunderbolt",
			"ataque2" => "Thunder",
			"ataque3" => "Discharge",
			"ataque4" => "Electro Ball"
		),
		"ataquesValor" => array (
			"ataque1" => 90,
			"ataque2" => 120,
			"ataque3" => 80,
			"ataque4" => 100
		),
		"optionValue" => array (
			"option1" => "thunderbolt",
			"option2" => "thunder",
			"option3" => "discharge",
			"option4" => "electro ball"
		),
		"debilidad" => "ground",
		"ventaja" => array("water","flying"),
		"tipo" => "electric",
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/pikachu-f.gif",
		"progressBar" => "250",
		"progressBarColor" => "yellow"),
	"Charizard" => array (
		"ataques" => array (
			"ataque1" => "Flare Blitz",
			"ataque2" => "Flamethrower",
			"ataque3" => "Slash",
			"ataque4" => "Flame Burst"
		),
		"ataquesValor" => array (
			"ataque1" => 120,
			"ataque2" => 90,
			"ataque3" => 70,
			"ataque4" => 70
		),
		"optionValue" => array (
			"option1" => "flare blitz",
			"option2" => "flamethrower",
			"option3" => "slash",
			"option4" => "flame burst"
		),
		"debilidad" => array("electric","water","rock","ground"),
		"ventaja" => array("grass","fight","ice","bug","steel"),
		"tipo" => array("fire","flying"),
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/charizard.gif",
		"progressBar" => "300",
		"progressBarColor" => "orange"),
	"Electivire" => array (
		"ataques" => array (
			"ataque1" => "Thunder Punch",
			"ataque2" => "Fire Punch",
			"ataque3" => "Ice Punch",
			"ataque4" => "Thunder"
		),
		"ataquesValor" => array (
			"ataque1" => 75,
			"ataque2" => 75,
			"ataque3" => 75,
			"ataque4" => 120
		),
		"optionValue" => array (
			"option1" => "thunder punch",
			"option2" => "fire punch",
			"option3" => "ice punch",
			"option4" => "thunder"
		),
		"debilidad" => "ground",
		"ventaja" => array("water","flying"),
		"tipo" => "electric",
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/electivire.gif",
		"progressBar" => "300",
		"progressBarColor" => "yellow"),
	"Goodra" => array (
		"ataques" => array (
			"ataque1" => "Outrage",
			"ataque2" => "Power Whip",
			"ataque3" => "Dragon Pulse",
			"ataque4" => "Body Slam"
		),
		"ataquesValor" => array (
			"ataque1" => 120,
			"ataque2" => 120,
			"ataque3" => 85,
			"ataque4" => 85
		),
		"optionValue" => array (
			"option1" => "outrage",
			"option2" => "power whip",
			"option3" => "dragon pulse",
			"option4" => "body slam"
		),
		"debilidad" => array("dragon","fairy","ice"),
		"ventaja" => "dragon",
		"tipo" => "dragon",
		"img" => "https://archive-media-1.nyafuu.org/vp/image/1383/26/1383264384695.gif",
		"progressBar" => "200",
		"progressBarColor" => "purple"),
	"Greninja" => array (
		"ataques" => array (
			"ataque1" => "Night Slash",
			"ataque2" => "Extrasensory",
			"ataque3" => "Feint Attack",
			"ataque4" => "Water Pulse"
		),
		"ataquesValor" => array (
			"ataque1" => 70,
			"ataque2" => 80,
			"ataque3" => 60,
			"ataque4" => 60
		),
		"optionValue" => array (
			"option1" => "night slash",
			"option2" => "extrasensory",
			"option3" => "feint attack",
			"option4" => "water pulse"
		),
		"debilidad" => array("bug","fight","electric","grass"),
		"ventaja" => array("fire","ground","rock","ghost","psychic"),
		"tipo" => array("water","dark"),
		"img" => "https://vignette.wikia.nocookie.net/pokemon-reborn/images/4/45/658sb.png",
		"progressBar" => "200",
		"progressBarColor" => "blue"),
	"Infernape" => array (
		"ataques" => array (
			"ataque1" => "Flare Blitz",
			"ataque2" => "Close Combat",
			"ataque3" => "Flame Wheel",
			"ataque4" => "Acrobatics"
		),
		"ataquesValor" => array (
			"ataque1" => 120,
			"ataque2" => 120,
			"ataque3" => 60,
			"ataque4" => 55
		),
		"optionValue" => array (
			"option1" => "flare blitz",
			"option2" => "close combat",
			"option3" => "flame wheel",
			"option4" => "acrobatics"
		),
		"debilidad" => array("psychic","flying","ground","water","rock"),
		"ventaja" => array("grass","steel","bug","ice","normal","rock","dark"),
		"tipo" => array("fight","fire"),
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/infernape.gif",
		"progressBar" => "250",
		"progressBarColor" => "orange"),
	"Lucario" => array (
		"ataques" => array (
			"ataque1" => "Force Palm",
			"ataque2" => "Bone Rush",
			"ataque3" => "Aura Sphere",
			"ataque4" => "Shadow Claw"
		),
		"ataquesValor" => array (
			"ataque1" => 60,
			"ataque2" => 25,
			"ataque3" => 80,
			"ataque4" => 70
		),
		"optionValue" => array (
			"option1" => "force palm",
			"option2" => "bone rush",
			"option3" => "aura sphere",
			"option4" => "shadow claw"
		),
		"debilidad" => array("psychic","flying","ground","fire","fight"),
		"ventaja" => array("steel","bug","ice","normal","rock","dark"),
		"tipo" => array("fight","steel"),
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/lucario.gif",
		"progressBar" => "250",
		"progressBarColor" => "blue"),
	"Victini" => array (
		"ataques" => array (
			"ataque1" => "Flare Blitz",
			"ataque2" => "Double-Edge",
			"ataque3" => "Flame Burst",
			"ataque4" => "Headbutt"
		),
		"ataquesValor" => array (
			"ataque1" => 120,
			"ataque2" => 120,
			"ataque3" => 70,
			"ataque4" => 70
		),
		"optionValue" => array (
			"option1" => "flare blitz",
			"option2" => "double-edge",
			"option3" => "flame burst",
			"option4" => "headbutt"
		),
		"debilidad" => array("water","rock","ground","bug","ghost","dark"),
		"ventaja" => array("steel","bug","ice","grass","fight","poison"),
		"tipo" => array("psychic","fire"),
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/victini.gif",
		"progressBar" => "150",
		"progressBarColor" => "orange"),
	"Gigalith" => array (
		"ataques" => array (
			"ataque1" => "Power Gem",
			"ataque2" => "Smack Down",
			"ataque3" => "Earthquake",
			"ataque4" => "Headbutt"
		),
		"ataquesValor" => array (
			"ataque1" => 80,
			"ataque2" => 50,
			"ataque3" => 100,
			"ataque4" => 70
		),
		"optionValue" => array (
			"option1" => "power gem",
			"option2" => "smack down",
			"option3" => "earthquake",
			"option4" => "headbutt"
		),
		"debilidad" => array("steel","water","fight","grass","ground"),
		"ventaja" => array("fire","bug","flying","ice"),
		"tipo" => "rock",
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/gigalith.gif",
		"progressBar" => "300",
		"progressBarColor" => "black"),
	"Snorlax" => array (
		"ataques" => array (
			"ataque1" => "Crunch",
			"ataque2" => "Body Slam",
			"ataque3" => "Chip Away",
			"ataque4" => "Psychic"
		),
		"ataquesValor" => array (
			"ataque1" => 80,
			"ataque2" => 85,
			"ataque3" => 70,
			"ataque4" => 90
		),
		"optionValue" => array (
			"option1" => "crunch",
			"option2" => "body slam",
			"option3" => "chip away",
			"option4" => "psychic"
		),
		"debilidad" => "fight",
		"ventaja" => "",
		"tipo" => "normal",
		"img" => "https://img.pokemondb.net/sprites/black-white/anim/back-normal/snorlax.gif",
		"progressBar" => "300",
		"progressBarColor" => "#0f3a41")
);//aqui se hace el arreglo o json, de lo que va a enviar 
//$pkx['lucario']

// echo json_encode($pkx);//aqui codifica el json de arriba para ser utilizado, solo se manda llamar el padre
// header('Location: http://192.168.64.2/juego pokemon/plataforma.php');
?>