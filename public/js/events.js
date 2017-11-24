$(document).ready(function() {
        var max_fields      = 100; //maximum input boxes allowed
        var wrapper         = $(".opcion-respuesta"); //Fields wrapper
        var add_button      = $(".add-field"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group">'+
                      '<label class="control-label col-sm-2">Opción '+ x +'</label>'+
                      '<div class=" col-sm-10">'+
                        '<div class="input-group">'+
                          '<span class="input-group-addon">'+
                            '<input type="checkbox">'+
                          '</span>'+
                          '<textarea class="form-control" rows="1" id="opcion'+ x +'" placeholder="Escribe tu opción de respuesta"></textarea>'+
                          '<span class="input-group-btn">'+
                            '<button class="btn btn-warning" type="button">X</button>'+
                          '</span>'+
                        '</div>'+
                      '</div>'+
                    '</div>'); //add input box

            }
        });

        $(wrapper).on("click",".btn-warning", function(e){ //user click on remove text
            e.preventDefault();
            if(x > 1){
              $(this).parent('span').parent('div').parent('div').parent('div').remove();
              x--;
            }
            else{
              alert("No puede existir una pregunta sin opciones de respuesta...");
            }
        })
    });
