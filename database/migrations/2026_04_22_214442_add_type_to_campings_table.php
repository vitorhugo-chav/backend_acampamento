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
        Schema::table('campings', function (Blueprint $table) {
            $table->string('type')->nullable()->after('maximal_age');
            
            // Set default values for existing records
            $table->string('type')->default('senior')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campings', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
