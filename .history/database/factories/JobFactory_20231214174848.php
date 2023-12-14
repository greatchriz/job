<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->foreignId('company_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        // $table->string('title')->nullable();
        // $table->text('description')->nullable();
        // $table->text('responsibilities')->nullable();
        // $table->text('requirements')->nullable();
        // $table->string('experiences')->nullable();
        // $table->text('duties')->nullable();
        // $table->text('benefits')->nullable();
        // $table->string('salary')->nullable();
        // $table->string('deadline')->nullable();
        return [

        ];
    }
}
