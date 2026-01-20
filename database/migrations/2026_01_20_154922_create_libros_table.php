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
        Schema::create('Libros', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('titulo');
            $table->string('isbn')->unique();
            $table->date('ano_publicacion');
            $table->string('numero_paginas')->nullable();
            $table->string('descripcion');
            $table->integer('stock_disponible');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
