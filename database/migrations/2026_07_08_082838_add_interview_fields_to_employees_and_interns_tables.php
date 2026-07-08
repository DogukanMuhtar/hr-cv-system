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
        Schema::table('employees_and_interns_tables', function (Blueprint $table) {
            Schema::table('employees', function (Blueprint $table) {
            $table->string('interviewer')->nullable()->after('status');
            $table->date('interview_date')->nullable()->after('interviewer');
});
            Schema::table('interns', function (Blueprint $table) {
            $table->string('interviewer')->nullable()->after('status');
            $table->date('interview_date')->nullable()->after('interviewer');
});
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees_and_interns_tables', function (Blueprint $table) {
            Schema::table('employees', function (Blueprint $table) {
    $table->dropColumn([
        'interviewer',
        'interview_date'
    ]);
});

Schema::table('interns', function (Blueprint $table) {
    $table->dropColumn([
        'interviewer',
        'interview_date'
    ]);
});
        });
    }
};
