var page = 1;
var avance=0;

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
	page=4;
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
		jsTrace("restriccion: " + restriccion);
	}else{
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

	$(document).ready(function() {
	$("#cargandoIcono").fadeIn("slow");
		$('.contenidosPages').load('/cursos/hojavida/page'+page+'/ ', function() {
			cargandopage=true;
			status = "incomplete";
			avance=1;
		});

	});
						$("#cargandoIcono").fadeOut("slow");
}


function cargarSIG(){
		$('#cargandoIcono').fadeIn("slow");	

	cargandopage=false;
	if(page < maxPages){
		page = page + 1;
		avance=page+1;

		$('.contenidosPages').load('/cursos/hojavida/page'+page+'/', function() {
			cargandopage=true;
			$("#cargandoIcono").fadeOut("slow");


		});
			
		if(page == maxPages){
			status = "completed";
			scoreRaw = 100;
			avance=6;
		}	

	}
	$("#cargandoIcono").hide("slow");
}

function cargarPREV(){

			$("#cargandoIcono").fadeIn("slow");
	cargandopage=false;
	if(page < maxPages){
		page = page - 1;
		$('.contenidosPages').load('/cursos/hojavida/page'+page+'/', function() {

			$("#cargandoIcono").fadeOut("slow");
			cargandopage=true;
			status = "incomplete";

		});
	}
$("#cargandoIcono").hide("slow");
}

