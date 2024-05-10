<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilo para el menú de navegación */
ul {
    list-style-type: none; /* Elimina los puntos de la lista */
    padding: 0;
    margin: 0;
}

li {
    display: inline; /* Los elementos de la lista se muestran en línea */
    margin-right: 10px; /* Espaciado entre elementos */
}

a {
    text-decoration: none; /* Elimina el subrayado de los enlaces */
    color: #333; /* Color del texto */
    font-weight: bold; /* Texto en negrita */
}

a:hover {
    color: #007bff; /* Cambia el color del texto al pasar el ratón */
}

    </style>
</head>
<body>
    <br>
    <center>
    <ul>
        <li><a href="{{ route('index') }}">Inicio</a></li>
        <li><a href="{{ route('succ') }}">Succ</a></li>
        <li><a href="{{ route('unoamuchos') }}">Uno a Muchos</a></li>
        <li><a href="{{ route('productos.pedidos', ['producto_id' => 1]) }}">Pedidos de Producto</a></li>
        <li><a href="{{ route('pedidos.productos') }}">Productos de Pedido</a></li>
    </ul>
    </center>
    <br>
    <h1><center>Envio de datos exitoso</center></h1>
    <center><h2><a href="{{ route('index') }}">Pulsa para regresar</a></h2></center>
</body>
</html>