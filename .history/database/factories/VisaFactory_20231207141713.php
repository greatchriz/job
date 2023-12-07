<?php

namespace Database\Factories;

use App\Models\Visa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visa>
 */
class VisaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name,
            'date_of_birth' => $this->faker->date('Y-m-d', '-25 years'),
            'place_of_birth' => $this->faker->city,
            'nationality' => $this->faker->country,
            'current_address' => $this->faker->address,
            'email_address' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,

            // Passport information
            'passport_number' => $this->faker->randomNumber(8),
            'passport_issue_date' => $this->faker->dateTimeBetween('-5 years'),
            'passport_expiry_date' => $this->faker->dateTimeBetween('+1 year', '+5 years'),

            // Travel information
            'intended_arrival_date' => '2024-02-02',
            'intended_duration_of_stay' => $this->faker->numberBetween(1, 3),
            'planned_entry_point' => $this->faker->city,
            'planned_exit_point' => $this->faker->city,
            'travel_insurance_information' => $this->faker->text(100),
            'accommodation_information' => $this->faker->text(100),

            // Employment information
            'employer_name' => $this->faker->company,
            'employer_address' => $this->faker->address,
            'job_title' => $this->faker->jobTitle,
            'employment_start_date' => $this->faker->dateTimeBetween('-24 month'),
            'employment_contract' => $this->faker->paragraph(3),
            'salary' => $this->faker->randomNumber(5),

            // Educational background
            'highest_level_of_education' => $this->faker->randomElement(['Bachelor degree', 'Master degree', 'Doctorate']),
            'educational_institution_name' => $this->faker->university,
            'educational_institution_address' => $this->faker->address,
            'degree_or_diploma_earned' => $this->faker->jobTitle,

            // Declaration of truthfulness
            'declaration_of_truthfulness' => 'Yes',
        ];
    }
}
