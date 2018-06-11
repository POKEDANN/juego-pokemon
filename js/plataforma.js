$(document).ready(function() {
  $('.pokemon-player').on('submit', 'form', function(event) {
    event.preventDefault();//cuando un boton esta adentro de un form este
    // event es para para evitar que se recargue la pagina

    var $pokemonPlayer = $(this).closest('section');//busca el pariente o padre mas cercano

    var $oponent = $($pokemonPlayer.data('oponent'));//aqui busca los datas que pusimos
    // en este caso es el de oponent, a los datas se les pone "data"-cualquier nombre

    $progressBar = $oponent.find('.barEle,.barLuca');//esto es para buscar una clase
    var $vidaPok = $oponent.find("#vidaEle,#vidaLuca");//esto es para buscar la vida del oponente
    var attackPower = $pokemonPlayer.find(":selected").data("ataque");//busca los data ataque
    //para saber el numero que eligio

    if (attackPower === undefined) attackPower = 0;//si no elige nada no hace nada
    var attack = $pokemonPlayer.find('select').val();//aqui busca el valor seleccionado en
    // el select

    var ataque = $(".selectLuca,.selectEle").data("ataque");
    var barra = $("barEle,.barLuca").data("ataque");

    if (attack == "thunder punch") {
    	$('.punoa').css({'right':0,'top':0}).show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0).stop(0);
    }
    else if (attack == "fire punch") {
    	$('.punof').css({'right':0,'top':0}).show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0).stop(0);
    }
    else if (attack == "ice punch") {
    	$('.punob').css({'right':0,'top':0}).show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0).stop(0);
    }
    else if (attack == "thunder") {
    	$('.trueno').css({'right':0,'top':0}).show(0).delay(2000).animate({left: '250px',bottom: '250px'},'slow').delay(2000).hide(0).stop(0);
    }
    else if (attack == "force palm") {
    	$('.force').css({'right':0,'top':0}).show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0).stop(0);
    }
    else if (attack == "bone rush") {
    	$('.hueso').css({'right':0,'top':0}).show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0).stop(0);
    }
    else if (attack == "aura sphere") {
    	$('.bolaa').css({'right':0,'top':0}).show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0).stop(0);
    }
    else if (attack == "shadow claw") {
    	$('.shadow').css({'right':0,'top':0}).show(0).delay(2000).animate({right: '250px',top: '250px'},'slow').delay(2000).hide(0).stop(0);
    }

    // var rand = Math.round(Math.random() * 15) + 1;//aqui selecciona un numero random hasta
    // el 15

    var width = parseInt($progressBar.width() / $progressBar.parent().width() * 100);//aqui le da
    // width a la progress-bar en porcentaje %, con el parseInt lo convierte a entero
    $("#vidaEle,#vidaLuca").html(width);

    var new_width = width - attackPower;//aqui le da el nuevo width

    if(new_width > 0) {
      $progressBar.css('width', new_width+'%');//si es mayor a 0 le da el nuevo width
      $vidaPok.html(new_width);//imprime el nuevo width
    } else {
      $vidaPok.html(0);//cuando llega a 0 ya no hace nada
      $progressBar.css('width', 0+'%');//si no ya no le da width
      alert('Ganador ' + $pokemonPlayer.data('oponent'));//manda el alert diciendo el ganador
    }
  });
});