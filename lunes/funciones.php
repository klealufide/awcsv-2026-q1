<?php
session_start();
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


$listaFrutas = ["melon", "manzana", "pera"];

for ($i = 0; $i < count($listaFrutas); $i++) {
    echo $listaFrutas[$i] . $saltoLinea;
}

foreach ($listaFrutas as $i => $fruta) {
    echo  "en la posicion " . $i . " se encuentra la fruta: " . $fruta . "<br>";
}


$listaEstudiantesNombres = ["Maria", "Luis", "Juan"];

//echo $listaFrutas[2];

$persona = [
    "nombre" => "Paola",
    "apellido" => "Mora",
    "edad" => 21,
    "esEstudiante" => true,
];


print_r($listaFrutas);
print_r($persona);

echo $listaFrutas[1] . $saltoLinea;

echo $persona["edad"] . $saltoLinea;

foreach ($persona as $clave => $valor) {
    //echo $clave.": ".$valor.$saltoLinea;
    echo $valor . $saltoLinea;
}


$persona2 = [
    "nombre" => "Marco",
    "apellido" => "Perez",
    "edad" => 40,
    "esEstudiante" => false,
];



$persona3 = [
    "nombre" => "Luisa",
    "apellido" => "Mendez",
    "edad" => 15,
    "esEstudiante" => true,
];

$listaEstudiantes = [
    $persona,
    $persona2,
    $persona3
];
echo $saltoLinea;
print_r($listaEstudiantes);

foreach ($listaEstudiantes as $clave => $arreglo) {
    foreach ($arreglo as $clave2 => $valor) {
        //echo $clave.": ".$valor.$saltoLinea;
        echo $valor . $saltoLinea;
    }
}


echo "<table border='1'><tr><td>Nombre</td><td>Apellido</td><td>Edad</td><td>Es estudiante?</td></tr>";

foreach ($listaEstudiantes as $estudiante) {
    $esEstudiante = ($estudiante['esEstudiante']) ? "Si" : "No";

    echo "<tr><td>" . $estudiante['nombre'] . "</td><td>" . $estudiante['apellido'] . "</td><td>" . $estudiante['edad'] . "</td><td>" .  $esEstudiante . "</td></tr>";
}
echo "</table>";




array_push($listaFrutas, "fresa");

print_r($listaFrutas);

$index = array_search("fresa", $listaFrutas);

echo $index;

$arreglo_unido = array_merge($listaFrutas, $listaEstudiantes);

print_r($arreglo_unido);

echo $saltoLinea;

echo $arreglo_unido[3];

echo $saltoLinea;
echo $arreglo_unido[6]["nombre"];

//simple
function sumar($a, $b)
{
    return $a + $b;
}
echo $saltoLinea;


function dividir($a, $b)
{
    return $a / $b;
}
echo $saltoLinea;
function calculadora($a, $b, $operador)
{
    $restar = function ($a, $b) {
        return $a - $b;
    };
    //flecha
    $multiplicar = fn($a, $b) => $a * $b;
    switch ($operador) {
        case '+':
            return sumar($a, $b);
            break;
        case '-':
            return $restar($a, $b);
            break;

        case '*':
            return $multiplicar($a, $b);
            break;

        case '/':
            return dividir($a, $b);
            break;
    }
}

echo $saltoLinea;
echo calculadora(10, 5, "*");

echo $saltoLinea;

$archivo = fopen("archivo.txt", "w"); //w creo archivo nuevo y escribo //a creo archivo o abro archivo existente y agrego datos
$text = "Nuevo texto\n";
fwrite($archivo, $text);
$text = "Nuevo texto2\n";
fwrite($archivo, $text);
fclose($archivo);
echo $saltoLinea;
$archivo = fopen("archivo.txt", "r");
while (!feof($archivo)) {
    echo fgets($archivo) . $saltoLinea;
}
fclose($archivo);
echo $saltoLinea;

$_SESSION["usuario"] = "kleal";
$_SESSION["rol"] = "admin";
$_SESSION["nombre"] = "Karol";

print_r($_SESSION);

echo $_SESSION["nombre"];

echo "<a href='unidad4.php'> Ir a Unidad4</a>";
echo $saltoLinea;
// Seguridad


$usuario = "kleal";
$clave = "123456";

$claveBD = '$2y$10$.7r.Y8mHCYApSQxavOWIQ.SZYw8B1F8sKO4XvjDtkqGdTDcflljRq';

// Obtener una clave encriptada
// Registro
//$claveBD = password_hash($clave, PASSWORD_BCRYPT);
echo $saltoLinea;
echo $claveBD;
echo $saltoLinea;
// Login
if (password_verify($clave, $claveBD)) {
    echo "Clave coincide";
} else {
    echo "Clave no coincide";
}
