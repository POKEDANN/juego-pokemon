var ataq = $( "#ataquesE option:selected" ).val();
var ataq2 = $( "#ataquesE option:selected" ).text();
console.log(ataq);
console.log(ataq2);

$(document).ready(function () {
	$("body").on("click",'#atacar',function() {
		if(ataq == 'thunder punch'){
				$(".progress-bar").width("75%");
			}
		});
	});