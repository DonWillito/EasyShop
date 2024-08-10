<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id(); // Crea un campo id auto incremental
            $table->string('Nombre_Producto');
            $table->decimal('Precio');
            $table->text('Descrpcion'); //descripcion del producto
            $table->softDeletes(); // Para SoftDeletes
            $table->timestamps(); // Crea campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
