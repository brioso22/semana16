<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\pedidos;

class PedidoProductoController extends Controller
{
    public function mostrarPedidosProducto($producto_id)
    {
        $producto = productos::all();
        $pedidos = pedidos::all();
        return view('pedidos_producto', compact('producto', 'pedidos'));
    }

    public function mostrarProductosPedido()
{
    $pedido = pedidos::all();
    $productos =productos::all();
    return view('productos_pedido', compact('productos'));
}

}