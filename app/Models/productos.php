<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'precio',
    ];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class)->withPivot('cantidad'); // conPivot se utiliza para acceder a los campos adicionales en la tabla pivote
    }
}
