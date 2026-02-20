<?php

$nombreEstudiante = "Maria";
$edad = 22;
$esEstudiante = true;
$listaFrutas = ["melon", "manzana", "pera"];
$espacio = "<br>";
$edadMayor = 18;

echo "Mi nombre es:" . $nombreEstudiante . $espacio;

if ($edad >= $edadMayor) {
    $saludo = "Hola adulto!";
} else {
    $saludo = "Hola menor de edad";
}

echo $saludo . $espacio;

$saludo = $edad >= $edadMayor ? "Hola adulto!" : "Hola menor de edad";

echo $saludo . $espacio;

if ($edad >= 65) {
    echo "Adulto mayor!" . $espacio;
} elseif ($edad >= $edadMayor) {
    echo "Adulto!" . $espacio;
} else {
    echo "menor de edad" . $espacio;
}

if ($edad >= $edadMayor) {
    if ($esEstudiante) {
        $saludo = "Es adulto y es estudiante!";
    } else {
        $saludo = "Es adulto y no  es estudiante!";
    }
} else {
    if ($esEstudiante) {
        $saludo = "Es menor de edad y es estudiante!";
    } else {
        $saludo = "Es menor de edad y no  es estudiante!";
    }
}

echo $saludo . $espacio;

$dia = 1;

switch ($dia) {
    case 1:
        echo "Lunes" . $espacio;
        break;
    case 2:
        echo "Martes" . $espacio;
        break;
    case 3:
        echo "Miercoles" . $espacio;
        break;
    case 4:
        echo "Jueves" . $espacio;
        break;
    case 5:
        echo "Viernes" . $espacio;
        break;
    case 6:
        echo "Sabado" . $espacio;
        break;
    case 7:
        echo "Domingo" . $espacio;
        break;
    default:
        echo "Numero no definido";
        break;
}


$a = 5;
$b = "5";

if ($a == $b) {
    echo "a y b son igual en valor" . $espacio;
}

if ($a === $b) {
    echo "a y b son igual en valor y en tipo" . $espacio;
}

if ($a != $b) {
    echo "a y b son diferentes en valor" . $espacio;
}

if ($a !== $b) {
    echo "a y b son diferentes en valor o en tipo" . $espacio;
}


$a = 5;
$b = 10;

if ($a < $b) {
    echo "a es menor que  b " . $espacio;
}


if ($a >= $b) {
    echo "a es mayor o igual que  b " . $espacio;
}


if ($edad >= $edadMayor && $esEstudiante) {
    $saludo = "Es adulto y es estudiante!";
} elseif ($edad >= $edadMayor && !$esEstudiante) {
    $saludo = "Es adulto y no es estudiante!";
} else {
    if ($edad < $edadMayor && $esEstudiante) {
        $saludo = "Es menor de edad y es estudiante!";
    } else {
        $saludo = "Es menor de edad y no es estudiante!";
    }
}
echo $saludo . $espacio;

$numero = 30;
while ($numero < 40) { // cuando no sabemos hasta donde cumple la condicion
    $numero++;
    echo "WHILE  " . $numero . "<br>";
}

do { // al menos una vez requerimos que se ejecute
    $numero++;
    echo "DOWHILE  " . $numero . "<br>";
} while ($numero < 40);


for ($i = 1; $i <= 10; $i++) {
    // tenemos limite
    echo "FOR  " . $i . "<br>";
}


for ($i = 1; $i <= 10; $i++) {
    // tenemos limite
    echo "Tabla del 3 = 3 X " . $i . " = " . ($i * 3) . "<br>";
}


foreach ($listaFrutas as $frutas) {
    echo $frutas . $espacio;
}



for ($i = 0; $i < count($listaFrutas); $i++) {
    // tenemos limite
    echo $listaFrutas[$i]. $espacio;
}
