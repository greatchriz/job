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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->string('amount');
            $table->string('status');
            $table->string('currency');
            $table->string('crypto_account')
            // type of transaction which options are deposit, expenses, withdrawal
            $table->enum('type', ['deposit', 'expenses', 'withdrawal']);
            //payment method
            $table->string('payment_method');
            //user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
