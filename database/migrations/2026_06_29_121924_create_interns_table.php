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
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('tc_no', 11)->unique();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('university');
            $table->string('department');
            $table->string('grade');
            $table->string('internship_type');
            $table->string('internship_duration');
            $table->string('cv_path');
            $table->string('status')->default('Beklemede');
            $table->text('hr_note')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interns');
    }
};
