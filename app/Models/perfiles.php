<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfiles extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'direccion',
        'ciudad',
    ];
    public function usuario()
    {
        return $this->belongsTo(usuarios::class);
    }
}
