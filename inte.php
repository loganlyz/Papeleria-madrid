<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Papelería Madrid</title>
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
        .frase {
            text-align: center;
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #265c1d;
        }
        .bienvenida {
            text-align: center;
            margin-top: 20px;
            font-size: 1.7rem;
            margin-bottom: 15px;
        }
        .separador {
            width: 70%;
            height: 5px;
            background: #8ecf80;
            margin: 20px auto;
            border-radius: 5px;
        }
        nav {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 35px;
        }
        a {
            background: #b8e6ac;
            padding: 15px 25px;
            text-decoration: none;
            color: #1f1f1f;
            font-size: 1.2rem;
            border-radius: 12px;
            font-weight: bold;
            box-shadow: 0 3px 6px rgba(0,0,0,0.15);
            transition: 0.3s ease;
        }
        a:hover {
            background: #c8f0bd;
            transform: scale(1.05);
        }
        .logo-box {
            margin-top: 40px;
            text-align: center;
        }
        .logo-box img {
            width: 200px;
            height: auto;
            border-radius: 18px;
            border: 3px solid #8ecf80;
            background: white;
            padding: 10px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.15);
        }
        .cuadro-extra {
            width: 60%;
            margin: 35px auto 0 auto;
            padding: 20px;
            background: #eefbe7;
            border-left: 6px solid #78b96d;
            border-radius: 12px;
            font-size: 1.1rem;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            text-align: center;
            line-height: 1.5;
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
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<header>Papelería Madrid</header>

<div class="frase">“Todo lo que necesitas para tus estudios en un solo lugar.”</div>

<div class="bienvenida">Bienvenido Logan</div>

<div class="separador"></div>

<nav>
    <a href="catalogo.php">Carrito</a>
    <a href="registro.php">Base De Datos</a>
    <a href="informacion.html">Información</a>
</nav>

<div class="logo-box">
    <img src="pape.png" alt="Logo Papelería Madrid" />
</div>

<div class="cuadro-extra">
    Atención rápida, precios accesibles y material escolar de calidad.
    <br><br>
    ¡Gracias por elegir Papelería Madrid como tu opción de confianza!
</div>

<div class="footer">
    Sello oficial – Papelería Madrid
</div>

</body>
</html>
