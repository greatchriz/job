<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class FormInputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //add another key value pair to the arrays above, where by the key will be "name" and the value will be the name of the array as in full_name, date_of_birth etc

        $visaApplicationDetails = [
            // Personal Information
            'full_name' => [
                'type' => 'text',
                'label' => 'Full Name:',
                'placeholder' => 'Your full name',
                'required' => true,
            ],
            'date_of_birth' => [
                'type' => 'date',
                'label' => 'Date of Birth:',
                'required' => true,
            ],
            'place_of_birth' => [
                'type' => 'text',
                'label' => 'Place of Birth:',
                'placeholder' => 'Your place of birth',
                'required' => true,
            ],
            'nationality' => [
                'type' => 'select',
                'label' => 'Nationality:',
                'options' => App\Models\Country::all(),
                'required' => true,
            ],
            'current_address' => [
                'type' => 'textarea',
                'label' => 'Current Address:',
                'rows' => 3,
                'required' => true,
            ],
            'email_address' => [
                'type' => 'email',
                'label' => 'Email Address:',
                'placeholder' => 'Your email address',
                'required' => true,
            ],
            'phone_number' => [
                'type' => 'text',
                'label' => 'Phone Number:',
                'placeholder' => 'Your phone number',
                'required' => true,
            ],

            // Passport Information
            'passport_number' => [
                'type' => 'text',
                'label' => 'Passport Number:',
                'placeholder' => 'Your passport number',
                'required' => true,
            ],
            'passport_issue_date' => [
                'type' => 'date',
                'label' => 'Passport Issue Date:',
                'required' => true,
            ],
            'passport_expiry_date' => [
                'type' => 'date',
                'label' => 'Passport Expiry Date:',
                'required' => true,
            ],

            // Travel Information
            'intended_arrival_date' => [
                'type' => 'date',
                'label' => 'Intended Arrival Date:',
                'required' => true,
            ],
            'intended_duration_of_stay' => [
                'type' => 'number',
                'label' => 'Intended Duration of Stay:',
                'placeholder' => 'Number of days',
                'min' => 1,
                'required' => true,
            ],
            'planned_entry_point' => [
                'type' => 'text',
                'label' => 'Planned Entry Point:',
                'placeholder' => 'Airport or border crossing',
                'required' => true,
            ],
            'planned_exit_point' => [
                'type' => 'text',
                'label' => 'Planned Exit Point:',
                'placeholder' => 'Airport or border crossing',
                'required' => true,
            ],
            'travel_insurance_information' => [
                'type' => 'textarea',
                'label' => 'Travel Insurance Information:',
                'rows' => 3,
                'placeholder' => 'Details of your travel insurance',
                'required' => true,
            ],
            'accommodation_information' => [
                'type' => 'textarea',
                'label' => 'Accommodation Information:',
                'rows' => 3,
                'placeholder' => 'Details of your accommodation',
                'required' => true,
            ],

            // Employment Information
            'employer_name' => [
                'type' => 'text',
                'label' => 'Employer Name:',
                'placeholder' => 'Name of your employer',
                'required' => true,
            ],
            'employer_address' => [
                'type' => 'textarea',
                'label' => 'Employer Address:',
                'rows' => 3,
                'placeholder' => 'Address of your employer',
                'required' => true,
            ],
            'job_title' => [
                'type' => 'text',
                'label' => 'Job Title:',
                'placeholder' => 'Your job title in Estonia',
                'required' => true,
            ],

            'employment_start_date' => [
                'type' => 'date',
                'label' => 'Employment Start Date:',
                'required' => true,
            ],
            'employment_contract' => [
                'type' => 'file',
                'label' => 'Employment Contract:',
                'accept' => '.pdf,.doc,.docx',
                'required' => true,
            ],
            'salary' => [
                'type' => 'number',
                'label' => 'Salary:',
                'placeholder' => 'Your monthly salary in euros',
                'required' => true,
            ],
            'work_permit_number' => [
                'type' => 'text',
                'label' => 'Work Permit Number (Optional):',
            ],

            // Educational Background
            'highest_level_of_education' => [
                'type' => 'select',
                'label' => 'Highest Level of Education:',
                'options' => [
                    'High school diploma',
                    'Bachelor\'s degree',
                    'Master\'s degree',
                    'Doctorate',
                ],
                'required' => true,
            ],
            'educational_institution_name' => [
                'type' => 'text',
                'label' => 'Educational Institution Name:',
                'placeholder' => 'Name of your educational institution',
                'required' => true,
            ],
            'educational_institution_address' => [
                'type' => 'textarea',
                'label' => 'Educational Institution Address:',
                'rows' => 3,
                'placeholder' => 'Address of your educational institution',
                'required' => true,
            ],
            'degree_or_diploma_earned' => [
                'type' => 'text',
                'label' => 'Degree or Diploma Earned:',
                'placeholder' => 'Your degree or diploma',
                'required' => true,
            ],

            // Financial Information
            'bank_statements' => [
                'type' => 'file',
                'label' => 'Bank Statements (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
            ],
            'proof_of_income' => [
                'type' => 'file',
                'label' => 'Proof of Income (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
            ],
            'tax_returns' => [
                'type' => 'file',
                'label' => 'Tax Returns (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
            ],

            // Additional Information
            'sponsor_name' => [
                'type' => 'text',
                'label' => 'Sponsor Name (Optional):',
                'placeholder' => 'Name of your sponsor',
            ],
            'sponsor_address' => [
                'type' => 'textarea',
                'label' => 'Sponsor Address (Optional):',
                'rows' => 3,
                'placeholder' => 'Address of your sponsor',
            ],
            'medical_certificate' => [
                'type' => 'file',
                'label' => 'Medical Certificate (Optional):',
                'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png',
            ],
            'police_clearance_certificate' => [
                'type' => 'file',
                'label' => 'Police Clearance Certificate (Optional):',
                'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png',
            ],
            'travel_history' => [
                'type' => 'textarea',
                'label' => 'Travel History (Optional):',
                'rows' => 3,
                'placeholder' => 'Details of your travel history in the past 5 years',
            ],
            'criminal_record' => [
                'type' => 'textarea',
                'label' => 'Criminal Record (Optional):',
                'rows' => 3,
                'placeholder' => 'Details of any criminal record you may have',
            ],

            // Other
            'photo_path' => [
                'type' => 'file',
                'label' => 'Photo (Optional):',
                'accept' => '.jpg,.jpeg,.png',
            ],
            'declaration_of_truthfulness' => [
                'type' => 'select',
                'label' => 'Declaration of Truthfulness:',
                'options' => [
                    '' => 'Select',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ],
                'required' => true,
            ],
        ];


    }
}
