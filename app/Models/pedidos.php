<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'cantidad',
    ];

    public function productos()
    {
        return $this->belongsToMany(Productos::class)->withPivot('cantidad'); // conPivot se utiliza para acceder a los campos adicionales en la tabla pivote
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
