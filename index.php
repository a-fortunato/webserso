<!DOCTYPE HTML> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Viajes La Edad Dorada</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/form.css" type="text/css">
        <link rel="stylesheet" href="css/cruceros.css" type="text/css">
        <script type="text/javascript" src="funciones.js"></script>
        <script type="text/javascript" src="formulario.js"></script>
    </head>
    <body> 
        <div id="background">
            <?php
            include_once 'header.php';


            if (isset($_GET["p"])) {
                /* @var $_GET type */
                $p = $_GET["p"];

                if ($p == "contacto") {
                    include 'contacto.php';
                } elseif ($p == "send") {
                    include 'send.php';
                } elseif ($p == "empresa") {
                    include 'empresa.php';
                } elseif ($p == "cruceros") {
                    include '1cruceros.php';
                } elseif ($p == "1cruceros") {
                    include '1cruceros.php';
                } elseif ($p == "1mediterraneo") {
                    include '1mediterraneo.php';
                } elseif ($p == "1mediterraneo1") {
                    include '1mediterraneo1.php';
                } elseif ($p == "1mediterraneo2") {
                    include '1mediterraneo2.php';
                } elseif ($p == "1balticas") {
                    include '1balticas.php';
                } elseif ($p == "1balticas1") {
                    include '1balticas1.php';
                } elseif ($p == "1balticas2") {
                    include '1balticas2.php';
                } elseif ($p == "1jonicas") {
                    include '1jonicas.php';
                } elseif ($p == "1jonicas1") {
                    include '1jonicas1.php';
                } elseif ($p == "1adriatico") {
                    include '1adriatico.php';
                } elseif ($p == "1adriatico1") {
                    include '1adriatico1.php';
                } elseif ($p == "1caribe") {
                    include '1caribe.php';
                } elseif ($p == "1caribe1") {
                    include '1caribe1.php';
                } elseif ($p == "2playas") {
                    include '2playas.php';
                } elseif ($p == "2sol") {
                    include '2sol.php';
                } elseif ($p == "2sol1") {
                    include '2sol1.php';
                } elseif ($p == "2sol2") {
                    include '2sol2.php';
                } elseif ($p == "2luz") {
                    include '2luz.php';
                } elseif ($p == "2luz1") {
                    include '2luz1.php';
                } elseif ($p == "2blanca") {
                    include '2blanca.php';
                } elseif ($p == "2blanca1") {
                    include '2blanca1.php';
                } elseif ($p == "2dorada") {
                    include '2dorada.php';
                } elseif ($p == "2dorada1") {
                    include '2dorada1.php';
                } elseif ($p == "2baleares") {
                    include '2baleares.php';
                } elseif ($p == "3cultura") {
                    include '3cultura.php';
                } elseif ($p == "3romanico") {
                    include '3romanico.php';
                } elseif ($p == "3madrid") {
                    include '3madrid.php';
                } elseif ($p == "3andalucia") {
                    include '3andalucia.php';
                } elseif ($p == "4europa") {
                    include '4europa.php';
                } elseif ($p == "4londres") {
                    include '4londres.php';
                } elseif ($p == "4londres1") {
                    include '4londres1.php';
                } elseif ($p == "4benelux") {
                    include '4benelux.php';
                } elseif ($p == "4roma") {
                    include '4roma.php';
                } elseif ($p == "4roma1") {
                    include '4roma1.php';
                } elseif ($p == "4viena") {
                    include '4viena.php';
                } elseif ($p == "5exotico") {
                    include '5exotico.php';
                } elseif ($p == "5seychelles") {
                    include '5seychelles.php';
                } elseif ($p == "5seychelles1") {
                    include '5seychelles1.php';
                } elseif ($p == "5groenlandia") {
                    include '5groenlandia.php';
                } elseif ($p == "5groenlandia1") {
                    include '5groenlandia1.php';
                } elseif ($p == "5mongolia") {
                    include '5mongolia.php';
                } elseif ($p == "5lesoto") {
                    include '5lesoto.php';
                } elseif ($p == "5lesoto1") {
                    include '5lesoto1.php';
                } elseif ($p == "ventajasdelimserso") {
                    include 'ventajasdelimserso.php';
                }
            } else {
                include 'principal.php';
            }
            include_once 'footer.php';
            ?>
        </div>
    </body>
</html>

