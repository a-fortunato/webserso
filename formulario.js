

function Validacion() {

	/** Valores de los formularios **/
	var FORM_dni = document.getElementById("dni").value;
	var FORM_nombre = document.getElementById("nombre").value;
	var FORM_email = document.getElementById("email").value;
	var FORM_texto = document.getElementById("mensaje").value;
	
	/** Valores auxiliares **/
	var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	//Comprobamos primero que todos los campos tengan datos
	if (FORM_dni == null || FORM_nombre == null || FORM_email == null
			|| FORM_texto == null || FORM_dni.length == 0
			|| FORM_nombre.length == 0 || FORM_email.length == 0
			|| FORM_texto.length == 0 || /^\s+$/.test(dni)
			|| /^\s+$/.test(nombre) || /^\s+$/.test(email)
			|| /^\s+$/.test(mensaje)) {
		alert("[ERROR] No puede haber ningun campo vacio");
		return false;
	} else if ( !expr.test(FORM_email) ) { //Comprueba que el mail es válido
		alert("Error: La direccion de correo es incorrecta.");
		return false;
	} else if( (!(/^\d{8}[A-Z]$/.test(FORM_dni))) || (FORM_dni.charAt(8) != letras[(FORM_dni.substring(0, 8))%23])) { //Comprueba que el DNI es válido
		alert("[ERROR] Debe introducir un dni valido. Ejemplo: 99999999A");
		  return false;
	}

	// Si el script ha llegado a este punto, todas las condiciones
	// se han cumplido, por lo que se devuelve el valor true
	return true;
}


