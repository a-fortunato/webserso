<?php

// claseImagen.php

class Imagen {

    public static function cargaImagen($destino, $tipoFoto) {
        $imagen = 'images/404_not_found.jpg';
        $auxdestino = $auxtipo = $linea = $foto = "";
        $pos = 0;

        $file = fopen("imagenes.txt", "r") or exit("Unable to open file!");

        // Comprobamos que está el destino indicado
        while ((!strpos($linea, $destino)) && (!feof($file))) {
            $linea = fgets($file); // leemos una linea cada vez
            $pos = strpos($linea, ":");
            $auxdestino = substr($linea, ($pos + 2), -2); // nos quedamos con lo que hay después de ": "
            // Hacemos "+2" para no guardar ":" ni el espacio siguiente.
        }

        // Si está, buscamos el tipo de foto a colocar. Si no, lo ignoramos.
        if ($auxdestino == $destino) {
            while (($auxtipo != $tipoFoto) && (!feof($file))) {
                $linea = fgets($file);
                $pos = strpos($linea, ":");
                $auxtipo = substr($linea, 0, ($pos)); // nos quedamos con lo que hay antes de ":"
            }

            // si encontramos el tipoFoto indicado, almacenamos la url (si existe), si no, ignoramos
            if ($auxtipo == $tipoFoto) {
                $foto = substr($linea, ($pos + 2), -2); // almacenamos el contenido (lo que hay después de ":")
                $imagen = 'images/' . $foto;
                if ($tipoFoto == "Descriptivo") {
                    $linea = fgets($file);
                    $auxtipo = substr($linea, 0, ($pos)); // nos quedamos con lo que hay antes de ":"
                    while (($auxtipo == $tipoFoto) && (!feof($file))) {
                        $foto = substr($linea, ($pos + 2), -2); // almacenamos el contenido (lo que hay después de ":")
                        $imagen = $imagen . '" alt="Imagen camarote">
							<img class="zoomIt" src="images/' . $foto;
                        $linea = fgets($file);
                        $auxtipo = substr($linea, 0, ($pos)); // nos quedamos con lo que hay antes de ":"
                    }
                }
            }
        }
        fclose($file);
        return $imagen;
    }

}

?>