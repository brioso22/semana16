<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido_productos extends Model
{
    use HasFactory;
    protected $fillable = [
        'pedido_id',
        'producto_id',
        'cantidad',
    ];
}
