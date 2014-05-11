<?php

if (isset($_GET["p"])) {
    /* @var $_GET type */
    $var = $_GET["p"];
    $tipo = substr($var, 0, 1); //Cogemos la primera letra de la variable $var
    //Así sabemos si son cruceros || playas || ...
    /* Si estoy en un crucero, listo los que NO sean ese crucero */
    echo '<ul>';
    if ($tipo == "1") { //Si es un crucero...
        //Ahora comprobamos si es un crucero de mediterráneo
        //echo "BIEEN"; :) !
        $tipoCrucero = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoCrucero != "1med") { //Si no es mediterráneo, saco mediterráneo...
			$imagen = Imagen::cargaImagen("1mediterraneo1", "Sidebar");
			echo '<li><a href="./?p=1mediterraneo1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
		} if ($tipoCrucero != "1adr") { //Si no es adriático...
			$imagen = Imagen::cargaImagen("1adriatico1", "Sidebar");
			echo '<li><a href="./?p=1adriatico1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoCrucero != "1car") { //Si no es caribe...
			$imagen = Imagen::cargaImagen("1caribe1", "Sidebar");
			echo '<li><a href="./?p=1caribe1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoCrucero != "1jon") { //Si no son jónicas...
			$imagen = Imagen::cargaImagen("1mediterraneo1", "Sidebar");
			echo '<li><a href="./?p=1jonicas1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoCrucero != "1bal") { //Si no son bálticas...
			$imagen = Imagen::cargaImagen("1balticas1", "Sidebar");
			echo '<li><a href="./?p=1balticas1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        }
		
    } elseif ($tipo == "2") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoPlaya = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoPlaya != "2bal") { //Si no baleares...
			$imagen = Imagen::cargaImagen("2baleares1", "Sidebar");
			echo '<li><a href="./?p=2baleares1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoPlaya != "2bla") { //Si es blanca...
			$imagen = Imagen::cargaImagen("2blanca1", "Sidebar");
			echo '<li><a href="./?p=2blanca1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
		} if ($tipoPlaya != "2dor") { //Si es caribe...
			$imagen = Imagen::cargaImagen("2dorada1", "Sidebar");
			echo '<li><a href="./?p=2dorada1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoPlaya != "2luz") { //Si es jónicas...
			$imagen = Imagen::cargaImagen("2luz", "Sidebar");
			echo '<li><a href="./?p=2luz1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoPlaya != "2sol") { //Si es jónicas...
			$imagen = Imagen::cargaImagen("2sol", "Sidebar");
			echo '<li><a href="./?p=2sol1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        }
    } elseif ($tipo == "3") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoCultura = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoCultura != "3and") { //Si no andalucía...
			$imagen = Imagen::cargaImagen("3andalucia", "Sidebar");
			echo '<li><a href="./?p=3andalucia"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoCultura != "3mad") {
			$imagen = Imagen::cargaImagen("3madrid", "Sidebar");
			echo '<li><a href="./?p=3madrid"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoCultura != "3rom") {
			$imagen = Imagen::cargaImagen("3romanico", "Sidebar");
			echo '<li><a href="./?p=3romanico"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        }
    } elseif ($tipo == "4") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoEu = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoEu != "4lon") { //Si baleares...
			$imagen = Imagen::cargaImagen("4londres1", "Sidebar");
			echo '<li><a href="./?p=4londres1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoEu != "4ben") {
			$imagen = Imagen::cargaImagen("4benelux", "Sidebar");
			echo '<li><a href="./?p=4benelux"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoEu != "4vie") {
			$imagen = Imagen::cargaImagen("4viena", "Sidebar");
			echo '<li><a href="./?p=4viena"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoEu != "4rom") {
			$imagen = Imagen::cargaImagen("4roma1", "Sidebar");
			echo '<li><a href="./?p=4roma1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        }
    } elseif ($tipo == "5") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoEx = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoEx != "5les") {
			$imagen = Imagen::cargaImagen("5lesoto1", "Sidebar");
			echo '<li><a href="./?p=5lesoto1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoEx != "5gro") {
			$imagen = Imagen::cargaImagen("5groenlandia1", "Sidebar");
			echo '<li><a href="./?p=5groenlandia1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoEx != "5sey") {
			$imagen = Imagen::cargaImagen("5seychelles1", "Sidebar");
			echo '<li><a href="./?p=5seychelles1"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        } if ($tipoEx != "5mon") {
			$imagen = Imagen::cargaImagen("5mongolia", "Sidebar");
			echo '<li><a href="./?p=5mongolia"><img
                    src="'.$imagen.'" alt="Img"></a></li>';
        }
    }
    echo '</ul>';
} else {
	echo '<div class="adboxPrincipal">';
		include 'adbox.php';
	echo '</div>';
}
?>
