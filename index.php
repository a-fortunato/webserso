<!DOCTYPE HTML> 
<html>
    <?php include_once 'claseImagen.php'; ?>
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
                include $p . '.php';
            } else {
                include 'principal.php';
            }
            include_once 'footer.php';
            ?>
        </div>
    </body>
</html>

