<?php
// no son typeadas
$nombreEstudiante = "Maria";
$edad = 22;
$esEstudiante = true;


$nombreEstudiante = "Felipe <br>";
echo $nombreEstudiante;
$saltoLinea = "<br>";
echo $edad;
$edadMayor = 18;
echo $saltoLinea;
if ($edad >= 65) {
    echo "Adulto mayor!";
} elseif ($edad >= $edadMayor) {
    echo "Adulto!";
} else {
    echo "menor de edad";
}

echo $saltoLinea;

if ($edad >= $edadMayor) {
    if ($esEstudiante) {
        echo "Es mayor de edad y estudiante!";
    } else {
        echo "Es mayor de edad y no es estudiante!";
    }
} else {
    if ($esEstudiante) {
        echo "Es menor de edad y estudiante!";
    } else {
        echo "Es menor de edad y no es estudiante!";
    }
}
echo $saltoLinea;

$dia  = 3;

switch ($dia) {
    case 1:
        echo "Lunes" . $saltoLinea;
        break;
    case 2:
        echo "Martes" . $saltoLinea;
        break;
    case 3:
        echo "Miercoles" . $saltoLinea;
        break;
    case 4:
        echo "Jueves" . $saltoLinea;
        break;
    case 5:
        echo "Viernes" . $saltoLinea;
        break;
    case 6:
        echo "Sabado" . $saltoLinea;
        break;

    case 7:
        echo "Domingo" . $saltoLinea;
        break;

    default:
        echo "Numero no definido";
        break;
}

$a = 5;
$b = "5";

if ($a == $b) {
    echo "Comparo unicamente valor == y a =  b en valor" . $saltoLinea;
}


if ($a === $b) {
    echo "Comparo valor y tipo  === Y a =  b en valor y tipo" . $saltoLinea;
}


if ($a != $b) {
    echo "Comparo si VALOR  de a y b son diferentes" . $saltoLinea;
}

if ($a !== $b) {
    echo "Comparo si VALOR o TIPO de a o b son diferentes" . $saltoLinea;
}

if ($a >= $b) {
    echo "A ES MAYOR O IGUAL A B" . $saltoLinea;
}
$a = 20;
if ($a > $b) {
    echo "A ES MAYOR A B" . $saltoLinea;
}
echo "edad: " . $edad . $saltoLinea;

if ($edad >= $edadMayor && $esEstudiante) {
    echo "Es mayor de edad y estudiante" . $saltoLinea;
}



if ($edad < $edadMayor || $esEstudiante) {
    echo "Es menor de edad o estudiante" . $saltoLinea;
}


if (!$esEstudiante) {
    echo "No Es estudiante";
}
echo "<h3>Tabla del 3</h3>";
for ($i = 0; $i <= 10; $i++) {
    echo "3 X " . $i . " = " . ($i * 3) . $saltoLinea;
}

$numero = 150;
//Siempre condicional
while ($numero < 50) {
    echo "WHILE" . $numero . $saltoLinea;
    $numero++;
}
$numero = 100;
// AL menos una vez
do {
    echo "DOWHILE" . $numero . $saltoLinea;
    $numero++;
} while ($numero < 50);


