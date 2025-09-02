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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('name_projects');
            $table->string('direccion');
            $table->foreignId('zona_id')->constrained('zona');
            $table->foreignId('planos_id')->constrained('planos');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_final');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
