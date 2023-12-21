<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            // string table for cv
            $table->string('cv')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });

        Schema::create('job_applications_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_applications_id');
            $table->unsignedBigInteger('message_id');
            $table->timestamps();

            $table->foreign('job_applications_id')->references('id')->on('job_applications')->onDelete('cascade');
            $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
        Schema::dropIfExists('job_applications_messages');
    }
};
