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
			echo '<li><a href="./?p=1mediterraneo1"><img
                    src="images/im_sidebar/cruc_med_1.jpg" alt="Img"></a></li>';
			} if ($tipoCrucero != "1adr") { //Si es adriático...
				echo '<li><a href="./?p=1adriatico1"><img
                    src="images/im_sidebar/cruc_adria_1.jpg" alt="Img"></a></li>';
        } if ($tipoCrucero != "1car") { //Si es caribe...
			echo '<li><a href="./?p=1caribe1"><img
                    src="images/im_sidebar/cruc_caribe_1.jpg" alt="Img"></a></li>';
        } if ($tipoCrucero != "1jon") { //Si es jónicas...
			echo '<li><a href="./?p=1jonicas1"><img
                    src="images/im_sidebar/cruc_jon_1.jpg" alt="Img"></a></li>';
        } if ($tipoCrucero != "1bal") { //Si es jónicas...
			echo '<li><a href="./?p=1balticas1"><img
                    src="images/im_sidebar/cruc_balt_1.jpg" alt="Img"></a></li>';
        }
    } elseif ($tipo == "2") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoPlaya = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoPlaya != "2bal") { //Si no baleares...
			echo '<li><a href="./?p=2baleares1"><img
                    src="images/im_sidebar/playa_baleares_1.jpg" alt="Img"></a></li>';
        } if ($tipoPlaya != "2bla") { //Si es blanca...
			echo '<li><a href="./?p=2blanca1"><img
                    src="images/im_sidebar/playa_blanca_1.jpg" alt="Img"></a></li>';
		} if ($tipoPlaya != "2dor") { //Si es caribe...
			echo '<li><a href="./?p=2dorada1"><img
                    src="images/im_sidebar/playa_dorada_1.jpg" alt="Img"></a></li>';
        } if ($tipoPlaya != "2luz") { //Si es jónicas...
			echo '<li><a href="./?p=2luz1"><img
                    src="images/im_sidebar/playa_luz_1.jpg" alt="Img"></a></li>';
        } if ($tipoPlaya != "2sol") { //Si es jónicas...
			echo '<li><a href="./?p=2sol1"><img
                    src="images/im_sidebar/playa_sol_1.jpg" alt="Img"></a></li>';
        }
    } elseif ($tipo == "3") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoCultura = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoCultura != "3and") { //Si no andalucía...
			echo '<li><a href="./?p=3andalucia"><img
                    src="images/im_sidebar/cul_andalucia.jpg" alt="Img"></a></li>';
        } if ($tipoCultura != "3mad") {
			echo '<li><a href="./?p=3madrid"><img
                    src="images/im_sidebar/cul_madrid.jpg" alt="Img"></a></li>';
        } if ($tipoCultura != "3rom") {
			echo '<li><a href="./?p=3romanico"><img
                    src="images/im_sidebar/cul_romanico.jpg" alt="Img"></a></li>';
        }
    } elseif ($tipo == "4") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoEu = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoEu != "4lon") { //Si baleares...
			echo '<li><a href="./?p=4londres1"><img
                    src="images/im_sidebar/eu_londres.jpg" alt="Img"></a></li>';
        } if ($tipoEu != "4ben") {
			echo '<li><a href="./?p=4benelux"><img
                    src="images/im_sidebar/eu_benelux.jpg" alt="Img"></a></li>';
        } if ($tipoEu != "4vie") {
			echo '<li><a href="./?p=4viena"><img
                    src="images/im_sidebar/eu_viena.jpg" alt="Img"></a></li>';
        } if ($tipoEu != "4rom") {
			echo '<li><a href="./?p=4roma1"><img
                    src="images/im_sidebar/eu_roma.jpg" alt="Img"></a></li>';
        }
    } elseif ($tipo == "5") { //Si es playas
        //Ahora compruebo si es un crucero de mediterráneo
        $tipoEx = substr($var, 0, 4); //Cojo las primeras 4 letras para ir comparando

        if ($tipoEx != "5les") {
			echo '<li><a href="./?p=5lesoto1"><img
                    src="images/im_sidebar/ex_lesoto.jpg" alt="Img"></a></li>';
        } if ($tipoEx != "5gro") {
			echo '<li><a href="./?p=5groenlandia1"><img
                    src="images/im_sidebar/ex_groenlandia.jpg" alt="Img"></a></li>';
        } if ($tipoEx != "5sey") {
			echo '<li><a href="./?p=5seychelles1"><img
                    src="images/im_sidebar/ex_seychelles.jpg" alt="Img"></a></li>';
        } if ($tipoEx != "5mon") {
			echo '<li><a href="./?p=5mongolia"><img
                    src="images/im_sidebar/ex_mongolia.jpg" alt="Img"></a></li>';
        }
    }
    echo '</ul>';
} else {
    include 'adboxPrincipal.php';
}
?>
