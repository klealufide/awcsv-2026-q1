<?php
session_start();
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
    echo $listaFrutas[$i] . $espacio;
}

echo "<hr>";
echo $listaFrutas[1]    . $espacio;

$persona = [
    "nombre" => "Maria",
    "apellido" => "Mora",
    "edad" => 22,
    "esEstudiante" => true
];

echo $persona["apellido"];

echo $espacio;
foreach ($persona as $index => $valor) {
    echo  $index . ": " . $valor . $espacio;
}




$persona2 = [
    "nombre" => "Juan",
    "apellido" => "Mora",
    "edad" => 50,
    "esEstudiante" => false
];

$persona3 = [
    "nombre" => "Pablo",
    "apellido" => "Campos",
    "edad" => 27,
    "esEstudiante" => true
];


$listaPersonas = [
    $persona,
    $persona2,
    $persona3
];


echo "<table border='1'><tr><td>Nombre</td><td>Apellido</td><td>Edad</td><td>Es estudiante?</td></tr>";

foreach ($listaPersonas as $index => $valor) {
    if ($valor["edad"] > 25) {
        $esEstudiante = ($valor["esEstudiante"]) ? "Es estudiante" : "No es estudiante";
        echo "<tr><td>" . $valor["nombre"] . "</td><td>" . $valor["apellido"] . "</td><td>" . $valor["edad"] . "</td><td>" .  $esEstudiante . "</td></tr>";
    }
}

echo "</table>";


print_r($listaPersonas);



echo "<hr>";


array_push($listaFrutas, "fresa");

print_r($listaFrutas);


$index = array_search("fresa", $listaFrutas);
echo $espacio;
echo $index;
echo $espacio;
$arreglo_unido = array_merge($listaFrutas, $listaPersonas);

print_r($arreglo_unido);

echo $espacio;

echo $arreglo_unido[3];
echo $espacio;
echo $arreglo_unido[6]["nombre"];

// Simple
function sumar($a, $b)
{
    return $a + $b;
}

//Anonima
$restar = function ($a, $b) {
    return $a - $b;
};

//flecha

$multiplicar = fn($a, $b) => $a * $b;

$numeroA = 10;
$numeroB = 5;

echo sumar($numeroA, $numeroB);
echo $espacio;
echo $restar($numeroA, $numeroB);
echo $espacio;
echo $multiplicar($numeroA, $numeroB);
echo $espacio;

$archivo = fopen("archivo.txt", "w");
$text = "Nuevo Hola mundo!\n";
fwrite($archivo, $text);
$text = "Otro Hola mundo!\n";
fwrite($archivo, $text);
fclose($archivo);


$archivo = fopen("archivo.txt", "r");
while (!feof($archivo)) {
    echo fgets($archivo) . $espacio;
}
fclose($archivo);

//variable reservada arreglo asociativo;
print_r($_SESSION);

$_SESSION["usuario"] = "kleal";
$_SESSION["rol"] = "admin";
$_SESSION["nombre"] = "Karol";
echo $_SESSION["usuario"];

echo "<a href='unidad4.php'> Ir a Unidad4</a>";
echo $espacio;

///////////////////////////////////////////Registro ///////////////////////////////////////

// uusuario  kleal //contrasenna N 12345

$clave = "12345";
// $2y$10$h5xV.Y6SinFxAaimCnR5we4Ezo0XluhTBZDYTINBsU77jWvGRVz6i
// $2y$10$dwR5.W5LzAq267ExW2fAyusQf9F1HnhdJ9w7E3qXTTkS8DL1RPcuO
$clave_encriptada = password_hash($clave, PASSWORD_BCRYPT);



///////////////////////////////////////////Login ///////////////////////////////////////

$clave_basededatos = '$2y$10$h5xV.Y6SinFxAaimCnR5we4Ezo0XluhTBZDYTINBsU77jWvGRVz6i';

if (password_verify($clave, $clave_basededatos)) {
    echo "La clave coincide";
} else {
    echo "La clave no coincide";
}
