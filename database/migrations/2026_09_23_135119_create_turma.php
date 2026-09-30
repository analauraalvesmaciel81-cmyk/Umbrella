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
        Schema::create('turma', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->unsignedBigInteger('turma_id');
            $table->foreign('turma_id')->references('id')->on('professor')->onDelete('cascade');
            $table->unsignedBigInteger('turma_aluno_id');
            $table->foreign('turma_aluno_id')->references('id')->on('aluno')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('turma', function (Blueprint $table) {
            $table->dropForeign(['turma_id']);
            $table->dropColumn('turma_id');
            $table->dropForeign(['turma_aluno_id']);
            $table->dropColumn('turma_aluno_id');
        });
        
        Schema::dropIfExists('turma');
    }
};

