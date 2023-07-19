<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('productos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('descripcion');
        $table->decimal('precio', 8, 2);
        $table->json('imagenes')->nullable(); // Columna para almacenar las imágenes (JSON)
        $table->integer('stock')->default(0);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return voidphp
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
