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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->text('Nombre');
            $table->text('Apellido_Paterno');
            $table->text('Apellido_Materno');
            $table->integer('Edad');
            $table->date('Fecha_de_nacimiento');
            $table->integer('Peso');
            $table->integer('Estatura');
            $table->text('Telefono');
            $table->text('Correo_Electronico');
            $table->text('Antecedentes');
            $table->text('Antecedentes_Familiares');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
