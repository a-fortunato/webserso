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

	echo '<img src="images/'.$destino.'/'.$figura.'.jpg" />';
	// de forma que $figura="cuadro"; mostraría la imagen cuadro.jpg
?>


<?php // claseImagen.php
	class imagen{
		public static function obtenerImagen($destino){
		
		}
	}
?>


<?php // Sitio desde el cual llamamos a la clase imagen y sus métodos
	include ("claseImagen.php");
	
	imagen::obtenerImagen(&dest);
?>