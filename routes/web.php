<?php


use App\Http\Controllers\ControllerUsuarios;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\PedidoProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerUsuarios::class, 'index'])->name('index');
Route::get('/succ', [ControllerUsuarios::class, 'succ'])->name('succ'); 
Route::post('/usuarios', [ControllerUsuarios::class, 'createinser'])->name('usuarios.createinser');
Route::get('/unoamuchos', [DatosController::class, 'mostrarUnoAMuchos'])->name('unoamuchos');
Route::get('/productos/{producto_id}/pedidos', [PedidoProductoController::class, 'mostrarPedidosProducto'])->name('productos.pedidos');
Route::get('/pedidos', [PedidoProductoController::class, 'mostrarProductosPedido'])->name('pedidos.productos');
