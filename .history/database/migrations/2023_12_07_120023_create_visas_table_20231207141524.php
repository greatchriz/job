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
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('full_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('current_address')->nullable();
            $table->string('email_address')->nullable();
            $table->string('phone_number')->nullable();

            // Passport information
            $table->string('passport_number')->nullable();
            $table->date('passport_issue_date')->nullable();
            $table->date('passport_expiry_date')->nullable();

            // Travel information
            $table->string('intended_arrival_date')->nullable();
            $table->integer('intended_duration_of_stay')->nullable();
            $table->string('planned_entry_point')->nullable();
            $table->string('planned_exit_point')->nullable();
            $table->string('travel_insurance_information')->nullable();
            $table->string('accommodation_information')->nullable();

            // Employment information
            $table->string('employer_name')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('job_title')->nullable();
            $table->date('employment_start_date')->nullable();
            $table->longText('employment_contract')->nullable();
            $table->decimal('salary')->nullable();
            $table->string('work_permit_number')->nullable();

            // Educational background
            $table->string('highest_level_of_education')->nullable();
            $table->string('educational_institution_name')->nullable();
            $table->string('educational_institution_address')->nullable();
            $table->string('degree_or_diploma_earned')->nullable();

            // Financial information
            $table->string('bank_statements')->nullable();
            $table->string('proof_of_income')->nullable();
            $table->string('tax_returns')->nullable();

            // Additional information
            $table->string('sponsor_name')->nullable();
            $table->string('sponsor_address')->nullable();
            $table->string('medical_certificate')->nullable();
            $table->string('police_clearance_certificate')->nullable();
            $table->string('travel_history')->nullable();
            $table->longText('criminal_record')->nullable();

            // Other
            $table->string('photo_path')->nullable();
            $table->string('declaration_of_truthfulness')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visas');
    }
};
