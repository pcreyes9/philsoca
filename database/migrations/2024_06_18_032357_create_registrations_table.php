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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('psa_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('hospital_name');
            $table->string('hospital_address');
            $table->string('email');
            $table->string('contact_number');
            $table->string('gender');
            $table->string('membership');
            $table->string('senior_citizen')->nullable();
            $table->string('proof_payment')->nullable();
            $table->string('trainee_cert')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
