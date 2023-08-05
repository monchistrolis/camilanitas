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
        $table->string('descripcion')->nullable();
        $table->decimal('precio', 8, 2);
        $table->integer('stock');
        $table->string('imagenes')->nullable(); // Define el campo 'foto' como nullable para permitir valores null
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