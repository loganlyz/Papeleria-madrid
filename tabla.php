<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tabla de Productos</title>
<style>
body{font-family:Arial;background:#e8ffe8;padding:20px;}
table{width:80%;margin:auto;border-collapse:collapse;background:white;}
th,td{padding:12px;border-bottom:1px solid #ccc;text-align:center;}
th{background:#59a859;color:white;}
</style>
</head>
<body>

<h1 style="text-align:center;">Productos Registrados</h1>

<table>
    <tr>
        <th>Serie</th>
        <th>Nombre</th>
        <th>Precio</th>
    </tr>

<?php
$res = $conexion->query("SELECT * FROM productos");

while ($row = $res->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['serie']}</td>";
    echo "<td>{$row['nombre']}</td>";
    echo "<td>$".number_format($row['precio'],2)."</td>";
    echo "</tr>";
}
?>
</table>

</body>
</html>
