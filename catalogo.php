<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Catálogo – Papelería Madrid</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: white;
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

    .contenedor-productos {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        padding: 40px;
        margin: auto;
        max-width: 1200px;
    }

    .producto {
        background: #e8f9e5;
        border: 2px solid #9bd48c;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }

    .producto img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        border: 2px solid #8ecf80;
        background: white;
    }

    button {
        margin: 8px;
        padding: 12px 20px;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        font-size: 1rem;
        width: 130px;
        font-weight: bold;
    }

    .btn-comprar {
        background: #6fd86b;
        color: #083d00;
    }
    .btn-eliminar {
        background: #ff8a8a;
        color: #590000;
    }

    #ticket {
        width: 90%;
        margin: 60px auto 40px auto;
        padding: 30px;
        background: #fff9d6;
        border: 3px solid #e8d88e;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        font-size: 1.1rem;
    }

    #ticket h2 {
        text-align: center;
        margin-bottom: 10px;
        color: #7a6a00;
    }

    #fecha-hora {
        text-align: center;
        margin-bottom: 20px;
        font-size: 0.95rem;
        color: #6b5d00;
        font-weight: bold;
    }

    .ticket-item {
        padding: 10px;
        border-bottom: 2px dashed #d9c879;
        display: flex;
        justify-content: space-between;
    }

    .ticket-total {
        text-align: right;
        padding-top: 15px;
        font-size: 1.3rem;
        font-weight: bold;
        color: #6b5d00;
    }

    #mensaje-final {
        text-align: center;
        font-size: 2rem;
        margin-top: 60px;
        display: none;
    }

    .btn-volver {
        background: #6fc2ff;
        color: #003652;
        padding: 15px 25px;
        border-radius: 12px;
        margin-top: 20px;
        font-size: 1.2rem;
    }
</style>
</head>
<body>

<header>Papelería Madrid – Catálogo</header>

<!-- YA NO HAY BOTÓN "IR AL CARRITO" COMO PEDISTE -->

<div class="contenedor-productos" id="productos"></div>

<!-- TICKET COMPLETO -->
<div id="ticket">
    <h2>Ticket</h2>
    <div id="fecha-hora"></div>
    <div id="lista-carrito"></div>
    <div id="total">Total: $0</div>
    <div id="descuento"></div>
    <button id="pagar" class="btn-comprar">Pagar</button>
</div>

<div id="mensaje-final">
    <p>🎉 Compra realizada con éxito 🎉</p>
    <a href="inte.php">
        <button class="btn-volver">Volver al menú</button>
    </a>
</div>

<script>
const productos = [
{"nombre":"Lápiz","precio":5,"img":"lapiz.jpg","serie":"A001"},
{"nombre":"Pluma","precio":10,"img":"pluma.jpg","serie":"A002"},
{"nombre":"Cuaderno","precio":25,"img":"cuaderno.jpg","serie":"AA003"},
{"nombre":"Marcador","precio":15,"img":"marcador.jpg","serie":"A004"},
{"nombre":"Colores","precio":50,"img":"colores.jpg","serie":"A005"},
{"nombre":"Tijeras","precio":18,"img":"tijeras.jpg","serie":"A006"},
{"nombre":"Borrador","precio":6,"img":"borrador.jpg","serie":"A007"},
{"nombre":"Regla","precio":12,"img":"regla.jpg","serie":"A008"},
{"nombre":"Pegamento","precio":14,"img":"pegamento.jpg","serie":"A009"},
{"nombre":"Cartulina","precio":5,"img":"cartulina.jpg","serie":"A010"},
{"nombre":"Folder","precio":8,"img":"folder.jpg","serie":"A011"},
{"nombre":"Engrapadora","precio":55,"img":"engrapadora.jpg","serie":"A012"},
{"nombre":"Clips","precio":10,"img":"clips.jpg","serie":"A013"},
{"nombre":"Pintura","precio":30,"img":"pintura.jpg","serie":"A014"},
{"nombre":"Pinceles","precio":35,"img":"pinceles.jpg","serie":"A015"},
{"nombre":"Hojas Blancas","precio":20,"img":"hojas.jpg","serie":"A016"},
{"nombre":"Resaltador","precio":13,"img":"resaltador.jpg","serie":"A017"},
{"nombre":"Cinta Adhesiva","precio":16,"img":"cinta.jpg","serie":"A018"},
{"nombre":"Corrector","precio":17,"img":"corrector.jpg","serie":"A019"},
{"nombre":"Folder Azul","precio":9,"img":"folderazul.jpg","serie":"A020"},
{"nombre":"Escuadra","precio":11,"img":"escuadra.jpg","serie":"A021"},
{"nombre":"Compás","precio":40,"img":"compas.jpg","serie":"A022"},
{"nombre":"Marca Textos","precio":28,"img":"marcatextos.jpg","serie":"A023"},
{"nombre":"Libreta","precio":22,"img":"libreta.jpg","serie":"A024"},
{"nombre":"Rotuladores","precio":32,"img":"rotuladores.jpg","serie":"A025"},
{"nombre":"Calendario","precio":45,"img":"calendario.jpg","serie":"A026"},
{"nombre":"Sobre","precio":4,"img":"sobre.jpg","serie":"A027"},
{"nombre":"Carpeta","precio":26,"img":"carpeta.jpg","serie":"A028"},
{"nombre":"Block de Dibujo","precio":34,"img":"block.jpg","serie":"A029"},
{"nombre":"Toner Negro","precio":60,"img":"toner.jpg","serie":"A030"}
];

let carrito = [];

function cargarProductos(){
    const cont = document.getElementById("productos");
    productos.forEach((p,i)=>{
        cont.innerHTML += `
        <div class='producto'>
            <img src='${p.img}'>
            <h3>${p.nombre}</h3>
            <p><b>Serie:</b> ${p.serie}</p>
            <p>$${p.precio}</p>
            <button class="btn-comprar" onclick='agregar(${i})'>Comprar</button>
            <button class="btn-eliminar" onclick='eliminar(${i})'>Eliminar</button>
        </div>`;
    });
}

function actualizarCarrito() {
    let lista = document.getElementById("lista-carrito");
    lista.innerHTML = "";

    let total = 0;
    carrito.forEach(item => {
        lista.innerHTML += `<div class="ticket-item">
            <span>${item.nombre} (Serie: ${item.serie})</span>
            <span>$${item.precio}</span>
        </div>`;
        total += item.precio;
    });

    let descuento = 0;
    if(total > 200){
        descuento = total * 0.30;
        document.getElementById("descuento").innerHTML =
        "Descuento 30%: -$" + descuento.toFixed(2);
    } else {
        document.getElementById("descuento").innerHTML = "";
    }

    document.getElementById("total").innerHTML =
        "Total: $" + (total - descuento).toFixed(2);
}

function agregar(i){
    carrito.push(productos[i]);
    actualizarCarrito();
}

function eliminar(i){
    carrito = carrito.filter(p => p.nombre !== productos[i].nombre);
    actualizarCarrito();
}

document.getElementById("pagar").onclick = async function(){

    if(carrito.length === 0){
        return;
    }

    await fetch("guardar_ticket.php", {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify(carrito)
    });

    document.getElementById("ticket").style.display = "none";
    document.getElementById("mensaje-final").style.display = "block";
};

function actualizarFecha(){
    const fecha = new Date();
    const opciones = { year: "numeric", month: "long", day: "numeric" };
    const hora = fecha.toLocaleTimeString("es-MX");

    document.getElementById("fecha-hora").innerHTML =
        `Fecha: ${fecha.toLocaleDateString("es-MX", opciones)}<br>
         Hora: ${hora}`;
}

actualizarFecha();
cargarProductos();
</script>

</body>
</html>

