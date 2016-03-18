

var page = 1;
var pagina=1;
var status="incomplete";
var scoreRaw = 0;
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
		$('.contenidosPages').load('/cursos/hojavida/page'+page+'/', function() {
		status = "incomplete";
		});
	});
}


function cargarSIG(){
	if(page < maxPages){
		page = page + 1;
		$('.contenidosPages').load('/cursos/hojavida/page'+page+'/', function() {


		});

		if(page == maxPages){
				status = "completed";
				scoreRaw = 100;
			}	


	}



}


function cargarPREV(){
	if(page < maxPages){
		page = page - 1;
		$('.contenidosPages').load('/cursos/hojavida/page'+page+'/', function() {
			status = "incomplete";

		});
	}
}

