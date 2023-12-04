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
            $table->string('job_title')->nullable();
            $table->string('location')->nullable();
            $table->string('company')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('salary')->nullable();
            $table->string('deadline')->nullable();
            $table->text('description')->nullable();
            $table->text('benefits')->nullable();
            $table->text('responsibilities')->nullable();
            $table->string('requirements')->nullable();
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
