<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Adds the university register number (e.g. NSS23CS011). Nullable so the template students still fit.
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('reg_no')->nullable()->unique()->after('roll_no');
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropUnique(['reg_no']);
            $table->dropColumn('reg_no');
        });
    }
};
