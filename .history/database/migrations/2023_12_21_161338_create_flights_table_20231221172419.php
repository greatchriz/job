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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('flight_number')->unique();
            $table->string('airline');
            $table->string('departure_airport');
            $table->string('arrival_airport');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->integer('duration');
            $table->enum('status', ['scheduled', 'delayed', 'cancelled', 'boarding', 'in_air', 'landed']);
            $table->integer('seats_available');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};


$table->unsignedBigInteger('airline_id');
$table->unsignedBigInteger('departure_airport_id');
$table->unsignedBigInteger('arrival_airport_id');
$table->dateTime('departure_time');
$table->dateTime('arrival_time');
$table->integer('duration');
$table->enum('status', ['scheduled', 'delayed', 'cancelled', 'boarding', 'in_air', 'landed']);
$table->integer('seats_available');
$table->decimal('price');
