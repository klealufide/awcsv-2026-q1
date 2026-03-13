<?php

$hostname = "db";
$database = "appdb";
$usernameDB = "appuser";
$passwordDB = "apppass";


$conn = new mysqli($hostname, $usernameDB, $passwordDB, $database);

if ($conn->connect_error) {

    echo "Conexion error: " . $conn->connect_error;
} else {
    echo "Conexion OKAY!!";
}
