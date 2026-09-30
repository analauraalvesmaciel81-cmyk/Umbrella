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
        Schema::create('reserva_professor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reserva_professor_id');
            $table->foreign('reserva_professor_id')->references('id')->on('reservas')->onDelete('cascade');
            $table->string('quantidade de alunos', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_professor');
    }
};
