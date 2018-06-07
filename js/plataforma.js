$(document).ready(function() {
  $('.pokemon-player').on('submit', 'form', function(event) {
    event.preventDefault();//cuando un boton esta adentro de un form este
    // event es para para evitar que se recargue la pagina

    var $pokemonPlayer = $(this).closest('section');//busca el pariente o padre mas cercano

    var $oponent = $($pokemonPlayer.data('oponent'));//aqui busca los datas que pusimos
    // en este caso es el de oponent, a los datas se les pone "data"-cualquier nombre

    var $progressBar = $oponent.find('.barEle,.barLuca');//esto es para buscar una clase
    var attack = $pokemonPlayer.find('select').val();//aqui busca el valor seleccionado en
    // el select

    if (attack == "thunder punch") {
    	$('.punoa').show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0);
    }
    else if (attack == "fire punch") {
    	$('.punof').show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0);
    }
    else if (attack == "ice punch") {
    	$('.punob').show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0);
    }
    else if (attack == "thunder") {
    	$('.trueno').show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0);
    }
    else if (attack == "force palm") {
    	$('.force').show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0);
    }
    else if (attack == "bone rush") {
    	$('.hueso').show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0);
    }
    else if (attack == "aura sphere") {
    	$('.bolaa').show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0);
    }
    else if (attack == "shadow claw") {
    	$('.shadow').show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0);
    }

    var rand = Math.round(Math.random() * 15) + 1;//aqui selecciona un numero random hasta
    // el 15

    var width = $progressBar.width() / $progressBar.parent().width() * 100;//aqui le da
    // width a la progress-bar en porcentaje %
    $("#vidaEle,#vidaLuca").prepend(width);

    var new_width = width - rand;//aqui le da el nuevo width

    if(new_width > 0) {
      $progressBar.css('width', new_width+'%');//si es mayor a 0 le da el nuevo width
    } else {
      $progressBar.css('width', 0+'%');//si no ya no le da width
      alert('Ganador ' + $pokemonPlayer.data('oponent'));//manda el alert diciendo el ganador
    }
  });
});