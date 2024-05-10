<?php

namespace App\Http\Controllers;

use App\Models\perfiles;
use Illuminate\Http\Request;
use App\Models\usuarios;

class controllerusuarios extends Controller
{
public function index(){

$usuarios = usuarios::all();
$perfiles = perfiles::all();


    return view('index',compact('usuarios','perfiles'));

}
public function succ(){

        return view('succseful');
    
    }

public function createinser(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => 'required|email|unique:usuarios|max:255',
        'telefono' => 'nullable|string|max:20',
    ]);

    usuarios::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'telefono' => $request->telefono,
    ]);

    return redirect()->route('succ')->with('success', 'Usuario creado correctamente.');
}

}
