<?php
/*** Leer un texto línea a línea. ***/

$file = fopen("1.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
?>

<?php
/*** Mostrar la imagen de la variable figura en la carpeta destino. ***/

	echo '<img src="images/'.$destino'/'.$figura.'.jpg" />';
	// de forma que $figura="cuadro"; mostraría la imagen cuadro.jpg
?>