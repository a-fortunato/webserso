function ver_submenu_desplegable(n) {
	document.getElementById("sub" + n).style.display = "block"
}
function ocultar(n) {
	document.getElementById("sub" + n).style.display = "none"
}

function medidas(id){ //Obtener las medidas de un div...
    return {w:document.getElementById(id).offsetWidth,h:document.getElementById(id).offsetHeight}
}
//USO: <input name="Bot&oacute;n" type="button" value="obtener ancho" onclick="alert(medidas('id').w)" />
