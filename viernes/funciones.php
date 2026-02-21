<?php

$nombreEstudiante = "Maria";
$edad  = 22;
$esEstudiante = true;
$listaFrutas = ["melon", "manzana", "pera"];

echo $nombreEstudiante . " - " . $edad;

$espacio = "<br>";
$edadMayor = 18;
echo $espacio;

if ($edad >= $edadMayor) {
    echo "es Adulto!" . $espacio;
} else {
    echo "es menor de edad!" . $espacio;
}

if ($edad >= $edadMayor) {
    if ($esEstudiante) {
        echo "es Adulto! y es estudiante" . $espacio;
    } else {
        echo "es Adulto! y no es estudiante" . $espacio;
    }
} else {
    if ($esEstudiante) {
        echo "es menor de edad! y es estudiante" . $espacio;
    } else {
        echo "es menor de edad! y no es estudiante" . $espacio;
    }
}


if ($edad >= 65) {
    echo "es Adulto Mayor!" . $espacio;
} elseif ($edad >= $edadMayor) {
    echo "es Adulto!" . $espacio;
} else {
    echo "es menor de edad!" . $espacio;
}


$dia = 4;

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
        echo "No esta definido" . $espacio;
        break;
}


$a = 5;
$b = "5";

// igualdad
if ($a == $b) {
    echo "a y b son con valores iguales" . $espacio;
}


if ($a === $b) {
    echo "a y b son con valores y tipo son iguales" . $espacio;
}


// diferentes
//valor
if ($a != $b) {
    echo "a y b son con de valores diferentes" . $espacio;
}

if ($a !== $b) {
    echo "a y b son diferentes en valor o tipo" . $espacio;
}

$a = 10;
$b = 20;

if ($a >= $b) {
    echo "A es mayor o igual a b" . $espacio;
}

if ($a < $b) {
    echo "A es menor a b" . $espacio;
}

$edad = 6;
if ($edad >= $edadMayor  && $esEstudiante) {
    echo "es Adulto! y es estudiante" . $espacio;
} elseif ($edad >= $edadMayor  && !$esEstudiante) {
    echo "es Adulto! y no es estudiante" . $espacio;
} else {
    if ($edad < $edadMayor || $esEstudiante) {
        echo "es menor de edad! o es estudiante" . $espacio;
    } else {
        echo "es menor de edad! y no es estudiante" . $espacio;
    }
}


while ($edad < 20) {
    echo "WHILE" . $edad . $espacio;
    $edad++;
}

do {
    echo "DOWHILE" . $edad . $espacio;
    $edad++;
} while ($edad < 20);

for ($i = 0; $i <= 10; $i++) {
    echo $i . $espacio;
}


for ($i = 1; $i <= 10; $i++) {
    echo "tabla del 3, 3 x " . $i . " = " . ($i * 3) . $espacio;
}


for ($i = 0; $i < count($listaFrutas); $i++) {
    echo $listaFrutas[$i] . $espacio;
}

foreach ($listaFrutas as $i => $fruta) {
    echo  "en la posicion " . $i . " se encuentra la fruta: " . $fruta . "<br>";
}
