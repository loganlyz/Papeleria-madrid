<?php
// CONEXIÓN A BASE DE DATOS
$conexion = new mysqli("localhost", "root", "", "papeleria");

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $serie = $_POST["serie"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO productos (serie, nombre, precio) 
            VALUES ('$serie', '$nombre', '$precio')";

    if ($conexion->query($sql)) {
        $mensaje = "✔ Producto agregado correctamente";
    } else {
        $mensaje = "❌ Error al agregar";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar – Papelería Madrid</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(180deg, #d9f5d0 55%, white 45%);
            color: #2e2e2e;
        }

        header {
            background: #aee8a0;
            padding: 30px;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .ventana {
            width: 420px;
            background: white;
            margin: 70px auto;
            padding: 25px;
            border-radius: 15px;
            border: 3px solid #8ecf80;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        input {
            width: 80%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 10px;
            border: 2px solid #8ecf80;
            font-size: 1rem;
        }

        .btn {
            margin-top: 20px;
            padding: 15px;
            width: 85%;
            background: #b8e6ac;
            font-size: 1.2rem;
            border-radius: 12px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            box-shadow: 0 3px 6px rgba(0,0,0,0.15);
        }

        .btn:hover {
            background: #c8f0bd;
            transform: scale(1.05);
        }

        .mensaje {
            margin-top: 15px;
            font-weight: bold;
            color: #2e6b2d;
        }

        .volver {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
            color: #265c1d;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background:#d9f5d0;
            padding: 20px;
            border-top: 3px solid #8ecf80;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<header>Agregar Producto</header>

<div class="ventana">

    <h2>Nuevo Registro</h2>

    <form method="POST">

        <input type="text" name="serie" placeholder="Número de serie" required>

        <input type="text" name="nombre" placeholder="Nombre del producto" required>

        <input type="number" step="0.01" name="precio" placeholder="Precio" required>

        <button class="btn" type="submit">Agregar</button>

    </form>

    <div class="mensaje"><?php echo $mensaje; ?></div>

    <a class="volver" href="base.php">⬅ Volver al menú</a>

</div>

<div class="footer">
    Sello oficial – Papelería Madrid
</div>

</body>
</html>
