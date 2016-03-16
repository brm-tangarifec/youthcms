

var page = 1;
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

function iniciar()
{
	
		url = "page"+page+".html";
		document.getElementById('page').src = url;
	}



// -------------------------------------------- Navegación Pages --------------------------------------------

function contenidoVisto(){
	if(page != maxPages){
		restriccion[page-1] = 1;
		document.getElementById('imgSig').style.opacity = "1";
		document.getElementById('imgFlecha').style.visibility = "visible";

	}
}

function cargarPREV(){
	if(page > 1){
		page = page - 1;
		url = "page"+page+".html";
    	document.getElementById('page').src = url;

	}
}

function cargarSIG(){
			if(page < maxPages){
		
			page = page + 1;
			url = "page"+page+".html";
			document.getElementById('page').src = url;
					
		}
	//}
}

function cargarPAG(pageArg){
	page = pageArg;
	url = "page"+page+".html";
    document.getElementById('page').src = url;
	//document.getElementById('imgFlecha').style.visibility = "hidden";

}
// -------------------------------------------- Navegación Pop --------------------------------------------
function cargarPop(nombrePopArg){
	var nombrePop = nombrePopArg;
	document.getElementById('pop').src = "pop/"+nombrePop+".html";
	document.getElementById('contenidosPop').style.zIndex = 5;
}
function cerrarPop(){
	document.getElementById('pop').src = "";
	document.getElementById('contenidosPop').style.zIndex = -10;
}

// *** Funciones de interfaz gráfica de la Plantilla ***

function cargarAyuda(){
	cargarPop("ayuda");
}

function cargarGlosario(){
	cargarPop("glosario");
}

function cargarMenu(){
	cargarPop("menu");
}

function ocultarInterfaz(oculta){
	if(oculta){
		document.getElementById('banner').style.visibility = "hidden";
		document.getElementById('imgGlosario').style.visibility = "hidden";
		document.getElementById('imgAyuda').style.visibility = "hidden";
		document.getElementById('imgMenu').style.visibility = "hidden";
	}else{
		document.getElementById('banner').style.visibility = "visible";
		document.getElementById('imgGlosario').style.visibility = "visible";
		document.getElementById('imgAyuda').style.visibility = "visible";
		document.getElementById('imgMenu').style.visibility = "visible";
	}
}