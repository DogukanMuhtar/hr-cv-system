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
        $table->unsignedBigInteger('approved_by')->nullable()->after('updated_by');
        $table->unsignedBigInteger('rejected_by')->nullable()->after('approved_by');
});
        Schema::table('interns', function (Blueprint $table) {
        $table->unsignedBigInteger('approved_by')->nullable()->after('updated_by');
        $table->unsignedBigInteger('rejected_by')->nullable()->after('approved_by');
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
        'approved_by',
        'rejected_by'
    ]);
});

Schema::table('interns', function (Blueprint $table) {
    $table->dropColumn([
        'approved_by',
        'rejected_by'
    ]);
});
        });
    }
};
