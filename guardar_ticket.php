<?php
$conexion = new mysqli("localhost", "root", "", "papeleria");

$data = json_decode(file_get_contents("php://input"), true);

foreach ($data as $p) {
    $nombre = $p["nombre"];
    $precio = $p["precio"];
    $serie = $p["serie"];

    $conexion->query("INSERT INTO productos(nombre, precio, serie) 
                      VALUES('$nombre', $precio, '$serie')");
}

echo "OK";
