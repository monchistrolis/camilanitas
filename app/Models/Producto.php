<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'foto', 'imagenes'];
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
