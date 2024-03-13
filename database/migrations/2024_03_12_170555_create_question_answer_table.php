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
        Schema::create('question_answer_table', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable();
            $table->string('answers')->nullable();
            $table->string('correct_answer')->nullable();
            $table->string('job_role')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_answer_tabel');
    }
};
