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

            //'type' => '',
            //'label' => '',
            //'placeholder' => '',
            //'options' => [],
            //'rows' => null,
            //'accept' => '',
            //'required' => false,
            //'min' => null,

            $table->id();
            $table->string('type');
            $table->string('label');
            $table->string('placeholder');
            $table->string('options');
            $table->string('rows');
            $table->string('accept');
            $table->string('required');
            $table->string('min');
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
