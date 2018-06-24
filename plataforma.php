<?php 
session_start();//Iniciamos/Habilitamos todas las Sesiones
require_once('recibir.php');//aqui le decimos que requiere de otro codigo
$pokemon = $_SESSION['pokemon'];//iniciamos la sesion requerida

$pokemonDatos = $_GET['pokemon']; //en este caso se cambia a get, se guarda en una variable para que jquery pueda obtenerla

// Verificamos si existe un Pokemon Seleccionado, en caso contrario detenemos la ejecucion de la pagina
// if (!isset($pokemon) or empty($pokemon)) {//isset Determina si una variable está definida y no es NULL y empty es muy obvia
	// echo 'No Has Seleccionado ningun Pokemon';
	// exit(1);//sale del codigo
	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/plataforma.css">

	<title>Plataforma</title>
</head>
<body>
	<section class="cpu pokemon-player" data-oponent=".player1">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 barrita">
					<img src="img/force.jpg" class="force">
					<img src="img/hueso.png" class="hueso">
					<img src="img/bolaa.jpg" class="bolaa">
					<img src="img/shadow.png" class="shadow">
					<div class="progress barraLuca">
					  <div class="progress-bar barLuca" role="progressbar" data-barra="100" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 300%;">
					    <span class="sr-only">100%</span>
					  </div>
					</div>
					<p id="vidaLuca">300</p>
					<form>
						<select name="ataquesL" id="ataquesL" class="selectLuca">
							<option id="cpucita" value="selecciona" disabled selected="true">Selecciona un ataque</option>
							<option value="force palm" data-ataque="60">Force Palm</option>
							<option value="bone rush" data-ataque="25">Bone Rush</option>
							<option value="aura sphere" data-ataque="80">Aura Sphere</option>
							<option value="shadow claw" data-ataque="70">Shadow Claw</option>
						</select>
						<button id="atacarL">Atacar</button>
					</form>
				</div>
				<div class="col-sm-6 text-right">
					<img src="https://img.pokemondb.net/sprites/black-white/anim/normal/lucario.gif" class="luca">
				</div>
			</div>
		</div>
	</section>

	<section class="player1 pokemon-player" data-oponent=".cpu" data-debilidad="<?php echo join(',',$pkx[$pokemon]['debilidad']);?>" data-ventaja="<?php echo join(',',$pkx[$pokemon]['ventaja']);?>" data-tipo="<?php echo join(',',$pkx[$pokemon]['tipo']);?>">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-left">
					<img src="img/puñoa.jpg" class="punoa">
					<img src="img/puñof.jpg" class="punof">
					<img src="img/puñob.jpg" class="punob">
					<img src="img/trueno.jpg" class="trueno">
					<img src="<?php echo $pkx[$pokemon]['img'];?>" class="elect">
				</div>
				<div class="col-sm-6">
					<div class="progress barraLuca">
					  <div class="progress-bar barEle" role="progressbar" data-barra="<?php echo $pkx[$pokemon]['progressBar']; ?>" aria-valuenow="<?php echo $pkx[$pokemon]['progressBar']; ?>" aria-valuemin="0" aria-valuemax="<?php echo $pkx[$pokemon]['progressBar']; ?>" style="width: <?php echo $pkx[$pokemon]['progressBar']; ?>%;background-color: <?php echo $pkx[$pokemon]['progressBarColor']; ?>;">
					    <span class="sr-only"><?php echo $pkx[$pokemon]['progressBar']; ?>%</span>
					  </div>
					</div>
					<p id="vidaEle"><?php echo $pkx[$pokemon]['progressBar']; ?></p>
					<form>
						<select id="playersito" name="ataquesE" id="ataquesE" class="selectEle">
							<option value="selecciona" disabled selected="true">Selecciona un ataque</option>
							<!-- <option value="thunder punch" data-ataque="75">Thunder Punch</option>
							<option value="fire punch" data-ataque="75">Fire Punch</option>
							<option value="ice punch" data-ataque="75">Ice Punch</option>
							<option value="thunder" data-ataque="120">Thunder</option> -->

							<!-- En lugar de todo el rollo de arriba se puede asi para que ponga la info del pokemon seleccionado: -->

							<?php
							// Creamos los Ciclos para Traer los Datos por Separado del Pokemon Seleccionado
							foreach($pkx[$pokemon]['optionValue'] as $a => $optionValue) {
								foreach($pkx[$pokemon]['ataques'] as $b => $ataques) {
									foreach($pkx[$pokemon]['ataquesValor'] as $c => $ataqueVal) {
										echo '<option value="'.$optionValue.'" data-ataque="'.$ataqueVal.'">'.$ataques.'</option>';//Imprimimos el Resultado
										
										// Eliminamos los Indices de cada Array una vez mostrados para que no se dupliquen los mismos
										unset($pkx[$pokemon]['optionValue'][$a]);
										unset($pkx[$pokemon]['ataques'][$b]);
										unset($pkx[$pokemon]['ataquesValor'][$c]);
										break; // Rompemos el Ciclo Ultimo
									}
									break;// Rompemos el Ciclo Penultimo
								}
							} // Finaliza el Ciclo Principal
							?>
						</select>
						<button id="atacarE">Atacar</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".seleccionM">
	  Launch demo modal
	</button>
	
	<div class="modal seleccionM" tabindex="-1" role="dialog" id="seleccionM">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Selecciona el primer pokemon que saldra a luchar:</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	        	<form action="recibir.php">
		        	<div class="col-sm-4"><img src="<?php echo $pkx[$pokemon[0]]['img']; ?>"><input type="radio" name="uno" value="primero" checked></div>
			        <div class="col-sm-4"><img class="imgModal" src="<?php echo $pkx[$pokemon[1]]['img']; ?>"><input type="radio" name="dos" value="segundo"></div>
			        <div class="col-sm-4"><img class="imgModal" src="<?php echo $pkx[$pokemon[2]]['img']; ?>"><input type="radio" name="tres" value="tercero"></div>
			        <button type="submit" class="btn btn-primary modalBtn">Seleccionar</button>
		    	</form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

</body>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/plataforma.js"></script>
</html>