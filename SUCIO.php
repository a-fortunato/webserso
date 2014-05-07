<div class="info">

</div>
</div>


<div class="contenidoBasico">

</div>
</div>

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
            <?php include 'header.php'; ?>

            <?php
            if (isset($_GET["p"])) {
                $p = $_GET["p"];
                ?>
                <?php if ($p == "contacto") { ?>
                    <?php include 'contacto.php'; ?>
                <?php } elseif ($p == "empresa") { ?>
                    <?php include 'empresa.php'; ?>


                <?php } elseif ($p == "cruceros") { ?>
                    <?php include 'cruceros.php'; ?>

                <?php } elseif ($p == "mediterraneo") { ?>
                    <?php include 'mediterraneo.php'; ?>
                <?php } elseif ($p == "mediterraneo1") { ?>
                    <?php include 'mediterraneo1.php'; ?>
                <?php } elseif ($p == "mediterraneo2") { ?>
                    <?php include 'mediterraneo2.php'; ?>    

                <?php } elseif ($p == "balticas") { ?>
                    <?php include 'balticas.php'; ?>
                <?php } elseif ($p == "balticas1") { ?>
                    <?php include 'balticas1.php'; ?>
                <?php } elseif ($p == "balticas2") { ?>
                    <?php include 'balticas2.php'; ?>                      


                <?php } elseif ($p == "jonicas") { ?>
                    <?php include 'jonicas.php'; ?>
                <?php } elseif ($p == "jonicas1") { ?>
                    <?php include 'jonicas1.php'; ?> 

                <?php } elseif ($p == "adriatico") { ?>
                    <?php include 'adriatico.php'; ?>
                <?php } elseif ($p == "adriatico1") { ?>
                    <?php include 'adriatico1.php'; ?> 


                <?php } elseif ($p == "caribe") { ?>
                    <?php include 'caribe.php'; ?>
                <?php } elseif ($p == "caribe1") { ?>
                    <?php include 'caribe1.php'; ?>

                <?php } elseif ($p == "playas") { ?>
                    <?php include 'playas.php'; ?>


                <?php } elseif ($p == "sol") { ?>
                    <?php include 'sol.php'; ?>
                <?php } elseif ($p == "sol1") { ?>
                    <?php include 'sol1.php'; ?>
                <?php } elseif ($p == "sol2") { ?>
                    <?php include 'sol2.php'; ?>  

                <?php } elseif ($p == "luz") { ?>
                    <?php include 'luz.php'; ?>
                <?php } elseif ($p == "luz1") { ?>
                    <?php include 'luz1.php'; ?>


                <?php } elseif ($p == "blanca") { ?>
                    <?php include 'blanca.php'; ?>
                <?php } elseif ($p == "blanca1") { ?>
                    <?php include 'blanca1.php'; ?>


                <?php } elseif ($p == "dorada") { ?>
                    <?php include 'dorada.php'; ?>
                <?php } elseif ($p == "dorada1") { ?>
                    <?php include 'dorada1.php'; ?>

                <?php } elseif ($p == "baleares") { ?>
                    <?php include 'baleares.php'; ?>


                <?php } elseif ($p == "cultura") { ?>
                    <?php include 'cultura.php'; ?>


                <?php } elseif ($p == "romanico") { ?>
                    <?php include 'romanico.php'; ?>

                <?php } elseif ($p == "madrid") { ?>
                    <?php include 'madrid.php'; ?>

                <?php } elseif ($p == "andalucia") { ?>
                    <?php include 'andalucia.php'; ?>

                <?php } elseif ($p == "europa") { ?>
                    <?php include 'europa.php'; ?>

                <?php } elseif ($p == "londres") { ?>
                    <?php include 'londres.php'; ?>

                <?php } elseif ($p == "benelux") { ?>
                    <?php include 'benelux.php'; ?>
                <?php } elseif ($p == "roma") { ?>
                    <?php include 'roma.php'; ?>
                <?php } elseif ($p == "viena") { ?>
                    <?php include 'viena.php'; ?>

                <?php } elseif ($p == "exotico") { ?>
                    <?php include 'exotico.php'; ?>

                <?php } elseif ($p == "seychelles") { ?>
                    <?php include 'seychelles.php'; ?>
                <?php } elseif ($p == "groenlandia") { ?>
                    <?php include 'groenlandia.php'; ?>
                <?php } elseif ($p == "mongolia") { ?>
                    <?php include 'mongolia.php'; ?>
                <?php } elseif ($p == "lesoto") { ?>
                    <?php include 'lesoto.php'; ?>

                <?php } elseif ($p == "ventajasdelimserso") { ?>
                    <?php include 'ventajasdelimserso.php'; ?>

                    <?php
                }
            } else {
                ?>
                <?php include 'principal.php'; ?>
            <?php } ?>
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>

