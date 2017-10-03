    var SlideID1 = $( "#slider1" );
    var SlideID2 = $( "#slider" );
    $.each( SlideID1,function( key, value ) {
      $( SlideID1).slider({
            //range: true,
            disabled: true,
            value: 500,
            max:500,
            min:0,
            change: function( event, ui ) {

            },
            slide: function( event, ui ) {
                $( "#bluepok" ).html( ui.value );
            }
        });
        $( SlideID2 ).slider({
                //range: true,
                disabled: true,
                value: 500,
                max:500,
                min:0,
                change: function( event, ui ) {

                },
                slide: function( event, ui ) {
                    $( "#yellowpok" ).html( ui.value );
                }
            });

    });
    var valueAttack;
    var idAttack;
    function pokeLife(idSelected){
        idAttack = $("#" + idSelected);
        //idAttack = idSelected;
        valueAttack = $("#" + idSelected).val();
        console.log(idSelected + ' ' + valueAttack)
        return {
            idAttack: idSelected, 
            valueAttack: valueAttack
        }


    }

    function pokeAttack(nameObj){
                var res = 0;
                if(nameObj !== '') {
                    $("input[type=submit][name^='" + nameObj + "']").each(function(){
                        //var data =  pokeLife();
                        if(nameObj == 'yellowAtack'){
                            if ($(idAttack).is(':selected')) {
                            bluePokLife = $("#bluepok").html() - $(idAttack).val();
                            $( SlideID1).slider({ value: bluePokLife });
                            $("#bluepok").html(bluePokLife);
                        }
                        }else if(nameObj == 'blueAtack'){
                            if ($(idAttack).is(':selected')) {
                            yellowPokLife = $("#yellowpok").html() - $(idAttack).val();
                                $( SlideID2).slider({ value: yellowPokLife });
                                $("#yellowpok").html(yellowPokLife);
                            }
                        }

                        //if(parseInt($(this).val()) > 0) {
                            //res -= parseInt($(this).val());
                        //}
                    });
                }
                //return res;
            }