<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'cantidad',
        'fecha_pedido',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
