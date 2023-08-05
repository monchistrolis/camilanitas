<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    // En el modelo CartItem
protected $fillable = ['product_id', 'nombre', 'cantidad','imagenes', 'opcion', 'precio'];

    // Establecer relación con el modelo de producto (asumiendo que tienes un modelo llamado Producto)
    public function product()
    {
        return $this->belongsTo(Producto::class, 'product_id');
    }
}
