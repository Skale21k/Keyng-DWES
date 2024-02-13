<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carritos', function (Blueprint $table) {

            $table->id(); // Cambiar a clave primaria estándar
            $table->unsignedBigInteger('usuario_id'); // Convertir a clave foránea
            $table->unsignedBigInteger('producto_id');
            $table->unsignedInteger('cantidad')->default(1); // Nueva columna para la cantidad
            $table->double('total'); // Nueva columna para el total

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carritos');
    }
};
