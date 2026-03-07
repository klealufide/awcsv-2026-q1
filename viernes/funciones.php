<?php
session_start();

$espacio = "<br>";
$numero = -5;
if ($numero > 0) {
    echo "El número es positivo.";
} elseif ($numero < 0) {
    echo "El número es negativo.";
} else {
    echo "El número es cero.";
}
if ($numero % 2 == 0) {
    echo "El número $numero es par." . $espacio;
} else {
    echo "El número $numero es impar." . $espacio;
}


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
echo "<hr>";
print_r($listaFrutas);
echo $listaFrutas[1]    . $espacio;

$persona = [
    "nombre" => "Maria",
    "apellido" => "Mora",
    "edad" => 22,
    "esEstudiante" => true
];

print_r($persona);

echo $persona["nombre"] . $espacio;

foreach ($persona as $index => $valor) {
    echo  "en la posicion " . $index . " se encuentra el valor  " . $valor . "<br>";
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


print_r($listaPersonas);

echo "<table border='1'><tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Es estudiante?</th></tr>";

foreach ($listaPersonas as $persona) {
    $esEstudiante = ($persona["esEstudiante"]) ? "Es estudiante" : "No es estudiante";
    if ($persona["edad"] > 25) {
        echo "<tr><td>" . $persona["nombre"] . "</td><td>" . $persona["apellido"] . "</td><td>" . $persona["edad"] . "</td><td>" .    $esEstudiante . "</td></tr>";
    }
}

echo "</table>";
echo "<hr>";
echo $listaPersonas[2]["nombre"];

$arreglo_unido = array_merge($listaFrutas, $listaPersonas);

print_r($arreglo_unido);


// funciones


//1. simple 
function sumar($a, $b)
{
    return $a + $b;
}

//2, anonima

$restar = function ($a, $b) {
    return $a - $b;
};

// flecha

$multiplicar = fn($a, $b) => $a * $b;

echo sumar(10, 5) . $espacio;
echo $restar(10, 5) . $espacio;
echo $multiplicar(10, 5) . $espacio;

$archivo = fopen("archivo.txt", "w");
$texto = "Texto A\n";
fwrite($archivo, $texto);
$texto = "Texto B\n";
fwrite($archivo, $texto);
fclose($archivo);

$archivo = fopen("archivo.txt", "r");
while (!feof($archivo)) {
    echo fgets($archivo) . $espacio;
}
fclose($archivo);


// ARREGLO ASOCIATIVO;
$_SESSION["usuario"] = "kleal";
$_SESSION["rol"] = "admin";
$_SESSION["nombre"] = "Karol Leal";
print_r($_SESSION);

echo "<a href='unidad4.php'> Ir a Unidad4</a>";
echo $espacio;


///////////////////////// REGISTRO //////////////// 1. USUARIO -> kleal 2.CLAVE -> 12345

$usuario = "kleal";
$clave = "12345";

$clave_basededatos = password_hash($clave, PASSWORD_BCRYPT);

//echo $clave_basededatos;

$hash_basededatos = '$2y$10$Rn/5WCwf0PQ3wzy.xfmOtue0d/O0zroh3.kPwk5IRmevfr3s6/yDi'; // Guardo en base de datos


///////////////////////// login //////////////// 1. USUARIO -> kleal 2.CLAVE -> 12345
$usuario = "kleal"; // formulario
$clave = "12345"; // formulario
$hash_basededatos = '$2y$10$Rn/5WCwf0PQ3wzy.xfmOtue0d/O0zroh3.kPwk5IRmevfr3s6/yDi';  // base de datos
// Informacion del usuariom: usuario, clave, rol, nombre

if (password_verify($clave, $hash_basededatos)) {
    echo "Clave coincide!";
    $_SESSION["usuario"] = "kleal";
    $_SESSION["rol"] = "admin";
    $_SESSION["nombre"] = "Karol Leal";
    print_r($_SESSION);
} else {
    echo "Clave NO coincide!";
}
