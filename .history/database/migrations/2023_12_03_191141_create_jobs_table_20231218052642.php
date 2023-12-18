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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('company_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            //'companyName' => $companyName,
            // 'jobLocation' => $jobLocation,
            // 'jobDate' => $jobDate,

            $table->string('companyLogo')->nullable();
            $table->string('companyName')->nullable();
            $table->string('jobLocation')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('responsibilities')->nullable();
            $table->text('requirements')->nullable();
            $table->string('experiences')->nullable();
            $table->text('duties')->nullable();
            $table->text('benefits')->nullable();
            $table->string('salary')->nullable();
            $table->date('deadline')->nullable();
            $table->date('postedDate')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
