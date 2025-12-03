<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $carrito = json_decode($_POST["carrito"], true);

    foreach ($carrito as $p) {

        $serie = $p["serie"];
        $nombre = $p["nombre"];
        $precio = $p["precio"];

        $sql = "INSERT INTO productos (serie, nombre, precio)
                VALUES ('$serie', '$nombre', '$precio')
                ON DUPLICATE KEY UPDATE
                nombre='$nombre', precio='$precio'";

        $conexion->query($sql);
    }

    header("Location: tabla.php");
    exit();
}
?>
