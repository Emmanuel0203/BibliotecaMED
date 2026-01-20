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
        Schema::create('Libro_Autor', function (Blueprint $table) {
            $table->uuid('fkidLibros');
            $table->uuid('fkidAutores');
            
            $table->primary(['fkidLibros', 'fkidAutores']);
            $table->foreign('fkidLibros')->references('id')->on('Libros')->onDelete('cascade');
            $table->foreign('fkidAutores')->references('id')->on('Autores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Libro_Autor');
    }
};
