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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string("numeroPlazas");
            $table->date("fecha");
            $table->string("otrosDatos");

            $table->foreignId('viajero_id')->constrained()->onDelete("cascade");
            $table->foreignId('destino_id')->constrained()->onDelete("cascade");  
            $table->foreignId('origen_id')->constrained()->onDelete("cascade");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
