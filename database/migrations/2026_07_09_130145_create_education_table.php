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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('institution');
            $table->string('degree');
            $table->string('type')->nullable(); // e.g. UG Degree, Higher Secondary
            $table->string('location')->nullable();
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->string('meta_info')->nullable(); // e.g. CGPA: 7.2 / 10.0
            $table->text('description')->nullable();
            $table->string('icon_type')->default('university'); // university, school
            $table->string('theme_color')->default('blue'); // blue, purple
            $table->json('coursework')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
