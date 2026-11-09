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
       Schema::create('professor_token', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professor')->onDelete('cascade');
            $table->text('token');
            $table->timestamp('valido_ate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('professor_token', function (Blueprint $table) {
            $table->dropForeign(['professor_id']);
        });

        Schema::dropIfExists('professor_token');
    }
};
