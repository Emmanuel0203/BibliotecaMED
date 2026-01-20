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
        Schema::create('Prestamos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion_estimada');
            $table->date('fecha_devolucion_real')->nullable();
            $table->boolean('estado')->default(false);
            $table->uuid('fkidLibros');
            $table->uuid('fkidUsuarios');
            
            $table->foreign('fkidLibros')->references('id')->on('Libros')->onDelete('cascade');
            $table->foreign('fkidUsuarios')->references('id')->on('Usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
