<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Base de Datos – Papelería Madrid</title>

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
            margin: 80px auto;
            padding: 25px;
            border-radius: 15px;
            border: 3px solid #8ecf80;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        h2 {
            color: #265c1d;
            margin-bottom: 20px;
        }

        .btn {
            display: block;
            width: 80%;
            margin: 15px auto;
            padding: 15px;
            background: #b8e6ac;
            text-decoration: none;
            color: #1f1f1f;
            font-size: 1.2rem;
            border-radius: 12px;
            font-weight: bold;
            box-shadow: 0 3px 6px rgba(0,0,0,0.15);
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #c8f0bd;
            transform: scale(1.05);
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

    <header>Base de Datos – Papelería Madrid</header>

    <div class="ventana">

        <h2>Panel de Control</h2>

        <a class="btn" href="agregar.php">➕ Agregar objetos</a>
        <a class="btn" href="eliminar.php">🗑️ Eliminar objetos</a>
        <a class="btn" href="tabla.php">📄 Ver tabla de objetos</a>

    </div>

    <div class="footer">
        Sello oficial – Papelería Madrid
    </div>

</body>
</html>
