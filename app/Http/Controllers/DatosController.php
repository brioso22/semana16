<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // Cambiado de cliente a Cliente
use App\Models\Pedido; // Cambiado de pedido a Pedido

class DatosController extends Controller
{
    public function mostrarUnoAMuchos()
    {
        $clientes = Cliente::all(); 
        $pedido = Pedido::all();
        return view('uno_a_muchos', compact('clientes','pedido'));
    }
}
