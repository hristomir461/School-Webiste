<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TeacherClass;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('names', 2048);
            $table->enum('class', [TeacherClass::TEACHER_STAFF, TeacherClass::PROFESSIONAL_PREPARATION, TeacherClass::BG_LANGUAGE_LITERATURE, TeacherClass::FOREIGN_LANGUAGES, TeacherClass::MATHEMATICS_INFORMATICS, TeacherClass::NATURAL_SCIENCES, TeacherClass::PHYSICAL_EDUCATION, TeacherClass::SOCIAL_SCIENCES])->default(TeacherClass::TEACHER_STAFF);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
