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
        Schema::create('student_councils', function (Blueprint $table) {
            $table->id();
            $table->string('name', 2048);
            $table->string('student_role', 2048);
            $table->string('class', 10);
            $table->string('image', 2048);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_councils');
    }
};
