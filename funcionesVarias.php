<!-- Funciones varias. Objetivo final: leer imágenes desde .txt y mostrarlas en la web desde donde se llamen -->

<?php
/*** Leer un texto línea a línea. ***/

	$file = fopen("1.txt", "r") or exit("Unable to open file!");
	//Output a line of the file until the end is reached
	while(!feof($file)){
		echo fgets($file). "<br />";
	}
	fclose($file);
?>

<?php
/*** Mostrar la imagen de la variable figura en la carpeta destino. ***/

	echo '<img src="images/'.$figura.'.jpg" />';
	// de forma que $figura="cuadro"; mostraría la imagen cuadro.jpg
?>


<?php // claseImagen.php
	class imagen2{
		public static function obtenerImagen($destino){
		
		}
	}
?>


<?php // Sitio desde el cual llamamos a la clase imagen y sus métodos
	include ("claseImagen.php");
	
	imagen::obtenerImagen(&dest);
?>


<?php
	$cadena = "prueba@leonpurpura.com"; 
	$subcadena = "@"; 
	// localicamos en que posición se haya la $subcadena, en nuestro caso la posicion es "7"
	$posicionsubcadena = strpos ($cadena, $subcadena); 
	// eliminamos los caracteres desde $subcadena hacia la izq, y le sumamos 1 para borrar tambien el @ en este caso
	$dominio = substr ($cadena, ($posicionsubcadena+1)); 
	echo $dominio; // leonpurpura.com
?>