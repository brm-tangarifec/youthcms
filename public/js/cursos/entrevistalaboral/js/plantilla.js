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

    case 7: 
    page=7;
    break;

    default:
    page=1;

}

var scoreRaw = 0;
var cargandopage=false;
// *** Aquí se ingresa el total de páginas ***
var maxPages = 7;

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
    url=String('/cursos/entrevistalaboral/page'+page+'/');
   
        $( ".contenidosPages" ).load( url, function() {
        $('.contenidosPages').fadeIn('slow');
        $('#cargandoIcono').fadeOut('slow');
       
    });

 

});
 
dataLayer.push({'pagina': '1 - A un paso de la cima', 'event': 'Clic-siguiente-pantalla'});
}

function cargarSIG(){

    if(page == maxPages){
        status = "completed";
        scoreRaw = 100;
        avance=7;
        dataLayer.push({'pagina': '7 - A un paso de la cima', 'event': 'pantalla-final'});
    }   
    $('#cargandoIcono').fadeIn('slow');


    $('.contenidosPages').fadeOut('slow');

    $('.contenidosPages').html('');
    cargandopage=false;
    if(page < maxPages){
        $('.contenidosPages').html('');
        page = page + 1;

        


        url=String('/cursos/entrevistalaboral/page'+page+'/');
        avance=page+1;
        $('.contenidosPages').html(' ');

       
            $( ".contenidosPages" ).load( url, function() {
            
            $('.contenidosPages').fadeIn('slow');
            $('#cargandoIcono').fadeOut('slow');

        });

  
    }

        if(page ==2){
            dataLayer.push({'pagina': '2- Consejos para una entrevista de trabajo', 'event': 'Clic-siguiente-pantalla'});
         }

        if(page ==3){
        dataLayer.push({'pagina': '3- Antes de la entrevista', 'event': 'Clic-siguiente-pantalla'});
        }

        if(page ==4){
        dataLayer.push({'pagina': '4- Durante la entrevista', 'event': 'Clic-siguiente-pantalla'});
        }

        if(page ==5){
        dataLayer.push({'pagina': '5- Después de la entrevista', 'event': 'Clic-siguiente-pantalla'});
        }

        if(page ==6){
        dataLayer.push({'pagina': '6- Actividad', 'event': 'Clic-siguiente-pantalla'});
        }

        if(page ==maxPages){
        dataLayer.push({'pagina': '7- Tips-Entrevista Laboral-insignia', 'event': 'pantalla-final'});
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
        url=String('/cursos/entrevistalaboral/page'+page+'/');
        $('.contenidosPages').html(' ');




            $( ".contenidosPages" ).load( url, function() {
            
            $('.contenidosPages').fadeIn('slow');
            $('#cargandoIcono').fadeOut('slow');
            cargandopage=true;
            status = "incomplete";
        });


 if(page ==1){
dataLayer.push({'pagina': '1 - A un paso de la cima', 'event': 'Clic-anterior-pantalla'});
     }

 if(page ==2){
            dataLayer.push({'pagina': '2- Consejos para una entrevista de trabajo', 'event': 'Clic-anterior-pantalla'});
         }

        if(page ==3){
        dataLayer.push({'pagina': '3- Antes de la entrevista', 'event': 'Clic-anterior-pantalla'});
        }

        if(page ==4){
        dataLayer.push({'pagina': '4- Durante la entrevista', 'event': 'Clic-anterior-pantalla'});
        }

        if(page ==5){
        dataLayer.push({'pagina': '5- Después de la entrevista', 'event': 'Clic-anterior-pantalla'});
        }


       if(page ==6){
        dataLayer.push({'pagina': '6- Actividad', 'event': 'Clic-anterior-pantalla'});
        }

        if(page ==maxPages){
        dataLayer.push({'pagina': '7- Tips-Entrevista Laboral-insignia', 'event': 'Clic-anterior-pantalla'});
        }


    }

 for (var x in jQuery.cache){
        delete jQuery.cache[x];
    }
}