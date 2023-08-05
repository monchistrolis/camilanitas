<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('nombre');
            $table->string('imagenes'); // Utiliza una columna de tipo 'string' para almacenar la URL o nombre del archivo de imagen
            $table->unsignedInteger('cantidad');
            $table->unsignedInteger('opcion');
            $table->unsignedDecimal('precio', 8, 2);
            $table->timestamps();
    
            // Define una relación con la tabla de productos (opcional)
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}