
var abierta_cat = document.getElementById("categoriaAbiertas");
if(abierta_cat != null){
var categoria_ab = abierta_cat.options[abierta_cat.selectedIndex].text;
var option_abierta = abierta_cat.options[abierta_cat.selectedIndex].value;
//0 Seleccione.. ; 1 Biologia; 2 Musica...
//console.log(option_abierta);
if(option_abierta > 0){
  $.get("subcategoria/"+option_abierta+"",function(response,categoria){
    $("#subcategoriaAbiertas").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaAbiertas").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
}else{
  $("#subcategoriaAbiertas").empty();
  $("#subcategoriaAbiertas").append("<option value=''>Seleccione una opcion..</option>");
}
}
$('#categoriaAbiertas').change(function(event){
  var categoria_ab = abierta_cat.options[abierta_cat.selectedIndex].text;
  $.get("subcategoria/"+event.target.value+"",function(response,categoria){
    $("#subcategoriaAbiertas").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaAbiertas").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });//
});

var sel_simple_cat = document.getElementById("categoriaSelSimple");
if(sel_simple_cat != null){
var categoria_ss = sel_simple_cat.options[sel_simple_cat.selectedIndex].text;
var option_cat_ss = sel_simple_cat.options[sel_simple_cat.selectedIndex].value;
if(option_cat_ss > 0){
  $.get("subcategoria/"+option_cat_ss+"",function(response,categoria){
    $("#subcategoriaSelSimple").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaSelSimple").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
}
}
$('#categoriaSelSimple').change(function(event){
  $.get("subcategoria/"+event.target.value+"",function(response,categoria){
    $("#subcategoriaSelSimple").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaSelSimple").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
});

var sel_multiple_cat = document.getElementById("categoriaSelMultiple");
if(sel_multiple_cat != null){
var categoria_ss = sel_multiple_cat.options[sel_multiple_cat.selectedIndex].text;
var option_cat_ss = sel_multiple_cat.options[sel_multiple_cat.selectedIndex].value;
if(option_cat_ss > 0){
  $.get("subcategoria/"+option_cat_ss+"",function(response,categoria){
    $("#subcategoriaSelSimple").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaSelSimple").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
}
}
$('#categoriaSelMultiple').change(function(event){
  $.get("subcategoria/"+event.target.value+"",function(response,categoria){
    $("#subcategoriaSelMultiple").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaSelMultiple").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
});

var fv_cat = document.getElementById("categoriaFalsoVerdadero");
if(fv_cat != null){
var categoria_fv = fv_cat.options[fv_cat.selectedIndex].text;
var option_cat_fv = fv_cat.options[fv_cat.selectedIndex].value;
if(option_cat_fv > 0){
  $.get("subcategoria/"+option_cat_fv+"",function(response,categoria){
    $("#subcategoriaFalsoVerdadero").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaFalsoVerdadero").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
}
}
$('#categoriaFalsoVerdadero').change(function(event){
  $.get("subcategoria/"+event.target.value+"",function(response,categoria){
    $("#subcategoriaFalsoVerdadero").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaFalsoVerdadero").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
});

var orden_cat = document.getElementById("categoriaOrden");
if(orden_cat != null){
var categoria_orden = orden_cat.options[orden_cat.selectedIndex].text;
var option_cat_orden = orden_cat.options[orden_cat.selectedIndex].value;
if(option_cat_orden > 0){
  $.get("subcategoria/"+option_cat_orden+"",function(response,categoria){
    $("#subcategoriaOrden").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaOrden").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
}
}
$('#categoriaOrden').change(function(event){
  $.get("subcategoria/"+event.target.value+"",function(response,categoria){
    $("#subcategoriaOrden").empty();
    for(i=0; i<response.length; i++){
      $("#subcategoriaOrden").append("<option value='"+response[i].id+"'>"+response[i].categoria+"</option>");
    }
  });
});
