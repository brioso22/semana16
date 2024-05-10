<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    body{
        background-color: #f3f5ff;
    }

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


    <center>
    <ul>
        <li><a href="{{ route('index') }}">Inicio</a></li>
        <li><a href="{{ route('succ') }}">Succ</a></li>
        <li><a href="{{ route('unoamuchos') }}">Uno a Muchos</a></li>
        <li><a href="{{ route('productos.pedidos', ['producto_id' => 1]) }}">Pedidos de Producto</a></li>
        <li><a href="{{ route('pedidos.productos') }}">Productos de Pedido</a></li>
    </ul>
    <br>
    
    <h1>Usuarios - perfiles</h1>
    <br>
    <h2>este es el ejemplo de las tablas con relacion de uno a uno</h2>
 
    </center>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

   

<br>
    <form action="{{ route('usuarios.createinser') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="correo" placeholder="Correo">
        <input type="text" name="telefono" placeholder="Teléfono">
        <button type="submit">Guardar Usuario</button>
    </form>


    <br>
    <table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Ciudad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($perfiles as $perfil)
            <tr>
                <td>{{ $perfil->usuario->nombre }}</td>
                <td>{{ $perfil->usuario->correo }}</td>
                <td>{{ $perfil->direccion }}</td>
                <td>{{ $perfil->ciudad }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
