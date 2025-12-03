<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serie = $_POST['serie'];

    $conexion = new mysqli("localhost", "root", "", "papeleria");
    if ($conexion->connect_error) { die("Conexión fallida: " . $conexion->connect_error); }

    $stmt = $conexion->prepare("DELETE FROM productos WHERE serie=?");
    $stmt->bind_param("i", $serie);

    if ($stmt->execute() && $stmt->affected_rows > 0) {
        $mensaje = "✔ Producto eliminado correctamente.";
    } else {
        $mensaje = "❌ No se encontró producto con ese número de serie.";
    }

    $stmt->close();
    $conexion->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminar – Papelería Madrid</title>
<style>
body{margin:0;font-family:Arial;background:linear-gradient(180deg,#d9f5d0 55%,white 45%);text-align:center;}
header{background:#aee8a0;padding:30px;font-size:2rem;font-weight:bold;}
.ventana{width:420px;background:white;margin:70px auto;padding:25px;border-radius:15px;border:3px solid #8ecf80;}
input{width:80%;padding:12px;margin-top:12px;border-radius:10px;border:2px solid #8ecf80;}
.btn{margin-top:20px;padding:15px;width:85%;background:#b8e6ac;font-size:1.2rem;border-radius:12px;font-weight:bold;border:none;}
.footer{position:fixed;bottom:0;width:100%;background:#d9f5d0;padding:20px;border-top:3px solid #8ecf80;font-weight:bold;text-align:center;}
.mensaje{margin-top:15px;font-weight:bold;color:#265c1d;}
.volver{display:block;margin-top:20px;font-weight:bold;color:#265c1d;text-decoration:none;}
</style>
</head>
<body>

<header>Eliminar Producto</header>

<div class="ventana">
<h2>Ingrese número de serie</h2>
<form method="POST">
<input type="number" name="serie" placeholder="Número de serie" required>
<button class="btn" type="submit">Eliminar</button>
</form>

<div class="mensaje"><?= $mensaje ?></div>

<a class="volver" href="tabla.php">⬅ Volver a la lista</a>
</div>

<div class="footer">Sello oficial – Papelería Madrid</div>

</body>
</html>
