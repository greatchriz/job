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
        Schema::create('form_inputs', function (Blueprint $table) {

            //'name' => '',
            //'type' => '',
            //'label' => '',
            //'placeholder' => '',
            //'rows' => null,
            //'accept' => '',
            //'required' => false,
            //'min' => null,
            //'icon' => '',
            //'tag' => '',

            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('label')->nullable();
            $table->string('placeholder')->nullable();
            //options can be an array
            $table->string('accept')->nullable();
            $table->string('required')->nullable();
            $table->string('min')->nullable();
            $table->string('icon')->nullable();
            $table->string('tag')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_inputs');
    }
};
