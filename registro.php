<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if ($password === "1234567") {
        header("Location: base.php");
        exit();
    } else {
        $mensaje = "❌ Contraseña incorrecta";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro - Papelería Madrid</title>
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
            width: 350px;
            background: white;
            padding: 25px;
            margin: 80px auto;
            border-radius: 15px;
            border: 3px solid #8ecf80;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        h2 {
            color: #265c1d;
        }

        input[type="password"] {
            width: 80%;
            padding: 12px;
            margin-top: 15px;
            border-radius: 10px;
            border: 2px solid #8ecf80;
            font-size: 1rem;
        }

        input[type="submit"] {
            background: #b8e6ac;
            padding: 12px 25px;
            border: none;
            margin-top: 25px;
            font-size: 1.1rem;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #c8f0bd;
            transform: scale(1.05);
        }

        .error {
            color: red;
            margin-top: 10px;
            font-weight: bold;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #d9f5d0;
            padding: 20px;
            text-align: center;
            border-top: 3px solid #8ecf80;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>Papelería Madrid</header>

<div class="ventana">
    <h2>Bienvenido Logan</h2>
    <p>Ingresa tu contraseña para acceder a la base de datos</p>

    <form method="POST">
        <input type="password" name="password" placeholder="Contraseña" required>
        <br>
        <input type="submit" value="Acceder">
    </form>

    <?php if ($mensaje != ""): ?>
        <div class="error"><?= $mensaje ?></div>
    <?php endif; ?>
</div>

<div class="footer">Sello oficial – Papelería Madrid</div>

</body>
</html>
