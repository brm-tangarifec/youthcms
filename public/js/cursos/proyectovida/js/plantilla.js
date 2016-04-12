var page = 1;
var avance=0;
var previo=0;
var url="";
var status="incomplete";
switch(avance) {
    case 0:
    page=1;
    break;
    case 1:
    page=1;
    break;
    case 2: 
    page=2;
    break;

    case 3: 
    page=3;
    break; 

    case 4: 
    page=4;
    break; 

    case 5: 
    page=5;
    break; 

    case 6: 
    page=6;
    break;
    default:
    page=1;

}

var scoreRaw = 0;
var cargandopage=false;
// *** Aquí se ingresa el total de páginas ***
var maxPages = 6;

// *** Aquí se calcula la restricción para las páginas ***
var restriccion = new Array;

function initRestriccion(posArg){


    if(posArg == 0){
        for(var i = 0; i < maxPages; i++){
            restriccion.push(0);
        }

        jsTrace('restriccion: ' + restriccion);
    }

    else{
        if(posArg == 1){
            for(var i = 0; i < maxPages; i++){
                restriccion.push(0);
            }
            for(var i = 0; i < page; i++){
                restriccion[i] = 1;
            }
        }
    }
    
}


// -------------------------------------------- Navegación Pages --------------------------------------------
function iniciar(){



    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 }

$('#cargandoIcono').fadeIn('slow');
$(document).ready(function() {



    $('.contenidosPages').fadeOut('slow');
    url=String('/cursos/proyectovida/page'+page+'/');

   
        $( ".contenidosPages" ).load( url, function() {
        
        $('.contenidosPages').fadeIn('fast');
        $('#cargandoIcono').fadeOut('slow');
    });

});
}

function cargarSIG(){
	 for (var x in jQuery.cache){
        delete jQuery.cache[x];
    }
    if(page == maxPages){
        status = "completed";
        scoreRaw = 100;
        avance=6;
    }   
    $('#cargandoIcono').fadeIn('slow');


    $('.contenidosPages').fadeOut('slow');

    $('.contenidosPages').html('');
    cargandopage=false;
    if(page < maxPages){
        $('.contenidosPages').html('');
        page = page + 1;



        url=String('/cursos/proyectovida/page'+page+'/');
        avance=page+1;
        $('.contenidosPages').html(' ');

       
            $( ".contenidosPages" ).load( url, function() {
            
            $('.contenidosPages').fadeIn('fast');
            $('#cargandoIcono').fadeOut('slow');

        });
    }
}

function cargarPREV(){
    previo=1;
    $('#cargandoIcono').fadeIn('slow');
    $('.contenidosPages').fadeOut('slow');
    $(document).remove('.contenidosPages');
    $('.contenidosPages').html('');
    previo=1;
    $(document).remove('.contenidosPages');
    $('.contenidosPages').html('');
    $('.contenidosPages').fadeOut('slow');
    $('#cargandoIcono').fadeIn('slow');
    cargandopage=false;
    if(page < maxPages){
        page = page - 1;
        avance=page-1;
        url=String('/cursos/proyectovida/page'+page+'/');
        $('.contenidosPages').html(' ');

       

            $( ".contenidosPages" ).load( url, function() {
            
            $('.contenidosPages').fadeIn('fast');
            $('#cargandoIcono').fadeOut('slow');
            cargandopage=true;
            status = "incomplete";
        });
    }

 for (var x in jQuery.cache){
        delete jQuery.cache[x];
    }
}
