<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Unidad 4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>

<body>
    <?php
    if (!empty($_SESSION)) {
        if ($_SESSION["rol"] == "admin") {
            echo "<b>Hola Administrador!, " . $_SESSION["nombre"] . "</b>";
        } else {
            echo "<b>Hola" . $_SESSION["nombre"] . "</b>";
        }
    } else {
        echo "<b>Hola ud no esta logueado,</b>";
    } ?>

    <a href="funciones.php"> Ir a funciones</a>
     <a href="logout.php"> Salir</a>
</body>

</html>