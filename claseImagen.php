<?php // claseImagen.php
	class Imagen{
		// private $archivo = "imagenes.txt";
		//public $imagen='';
		public static function cargaImagen($destino, $tipoFoto){
			//$lugar = substr($destino, 0, 1); //Cogemos la primera letra del destino
			$file = fopen("imagenes.txt", "r") or exit("Unable to open file!");
			$imagen='';
			$auxdestino = 0; $auxtipo = 0;
			
			// Comprobamos que está el destino indicado
			while(($auxdestino != $destino) && (!feof($file))){
				$linea = fgets($file); // leemos una linea cada vez
				$pos = strpos($linea, ":");
				$auxdestino = substr($linea, ($pos+2)); // nos quedamos con lo que hay después de ": "
				// Hacemos "+2" para no guardar ":" ni el espacio siguiente.
			}
				
			// Si está, buscamos el tipo de foto a colocar. Si no, lo ignoramos.
			if ($auxdestino == $destino){
				while(($auxtipo != $tipoFoto) && (!feof($file))){
					$linea = fgets($file);
					$pos = strpos($linea, ":");
					$auxtipo = substr($linea, 0, ($pos)); // nos quedamos con lo que hay antes de ":"
				}
				
				// si encontramos el tipoFoto indicado, almacenamos la url (si existe), si no, ignoramos
				if($auxtipo == $tipoFoto){
					$foto = substr($linea, ($pos+2)); // almacenamos el contenido (lo que hay después de ":")
					$imagen = 'images/'.$foto;
					//echo 'images/'.$foto.'+';
				}
			}				
			//}			
			fclose($file);
			//echo $imagen;
			return $imagen;
		}
	}
	$img = new Imagen;
?>