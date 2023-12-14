<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->string('name');
        // $table->string('logo')->nullable();
        // $table->string('location')->nullable();
        // $table->string('category')->nullable();
        // $table->text('description')->nullable();
        // $table->string('size')->nullable();
        return [
            'name' => $this->faker->company(),
            'logo' => $this->faker->imageUrl(),
            'location' => $this->faker->city(),
            'category' => 'technology',
            'description' => $this->faker->text(),
            'size' => '50-100',
        ];
    }
}
