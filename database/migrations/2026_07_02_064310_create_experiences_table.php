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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('role');
            $table->string('type')->nullable(); // e.g. Full-time, Internship
            $table->string('location')->nullable();
            $table->string('start_date');
            $table->string('end_date')->nullable(); // e.g. PRESENT
            $table->boolean('is_current')->default(false);
            $table->text('description')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('theme_color')->default('blue'); // blue, purple, teal, orange
            $table->json('technologies')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
