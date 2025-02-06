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
        Schema::table('users', function (Blueprint $table) {
            // $table->string('username')->nullable();

            $table->string('name')->nullable();
            $table->string('country')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('hospiAddress')->nullable();
            $table->longtext('bio')->nullable();
            $table->string('photo')->nullable();
            $table->string('contact_number')->nullable();

            $table->string('userType')->default('speaker');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropColumn('username');
        });
    }
};
