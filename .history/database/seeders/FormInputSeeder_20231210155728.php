<?php

namespace Database\Seeders;

use App\Models\FormInput;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;



class FormInputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        $formInputs = [
            // Personal Information
            [
                'name' => 'full_name',
                'type' => 'text',
                'label' => 'Full Name:',
                'placeholder' => 'Your full name',
                'required' => true,
                'tag' => 'personal-information',
            ],
            [
                'name' => 'date_of_birth',
                'type' => 'date',
                'label' => 'Date of Birth:',
                'required' => true,
                'tag' => 'personal-information',
            ],
            [
                'name' => 'place_of_birth',
                'type' => 'text',
                'label' => 'Place of Birth:',
                'placeholder' => 'Your place of birth',
                'required' => true,
                'tag' => 'personal-information',
            ],
            [
                'name' => 'nationality',
                'type' => 'text',
                'label' => 'Nationality:',
                'placeholder' => 'Country Of Origin',
                'required' => true,
                'tag' => 'personal-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Current Address:',
                'required' => true,
                'tag' => 'personal-information',
            ],
            [
                'type' => 'email',
                'label' => 'Email Address:',
                'placeholder' => 'Your email address',
                'required' => true,
                'tag' => 'personal-information',
            ],
            [
                'type' => 'text',
                'label' => 'Phone Number:',
                'placeholder' => 'Your phone number',
                'required' => true,
                'tag' => 'personal-information',
            ],

            // Passport Information
            [
                'type' => 'text',
                'label' => 'Passport Number:',
                'placeholder' => 'Your passport number',
                'required' => true,
                'tag' => 'passport-information',
            ],
            [
                'type' => 'date',
                'label' => 'Passport Issue Date:',
                'required' => true,
                'tag' => 'passport-information',
            ],
            [
                'type' => 'date',
                'label' => 'Passport Expiry Date:',
                'required' => true,
                'tag' => 'passport-information',
            ],

            // Travel Information
            [
                'type' => 'date',
                'label' => 'Intended Arrival Date:',
                'required' => true,
                'tag' => 'travel-information',
            ],
            [
                'type' => 'number',
                'label' => 'Intended Duration of Stay:',
                'placeholder' => 'Number of days',
                'min' => 1,
                'required' => true,
                'tag' => 'travel-information',
            ],
            [
                'type' => 'text',
                'label' => 'Planned Entry Point:',
                'placeholder' => 'Airport or border crossing',
                'required' => true,
                'tag' => 'travel-information',
            ],
            [
                'type' => 'text',
                'label' => 'Planned Exit Point:',
                'placeholder' => 'Airport or border crossing',
                'required' => true,
                'tag' => 'travel-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Travel Insurance Information:',
                'rows' => 3,
                'placeholder' => 'Details of your travel insurance',
                'required' => true,
                'tag' => 'travel-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Accommodation Information:',
                'rows' => 3,
                'placeholder' => 'Details of your accommodation',
                'required' => true,
                'tag' => 'travel-information',
            ],

            // Employment Information
            [
                'type' => 'text',
                'label' => 'Employer Name:',
                'placeholder' => 'Name of your employer',
                'required' => true,
                'tag' => 'employment-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Employer Address:',
                'rows' => 3,
                'placeholder' => 'Address of your employer',
                'required' => true,
                'tag' => 'employment-information',
            ],
            [
                'type' => 'text',
                'label' => 'Job Title:',
                'placeholder' => 'Your job title in Estonia',
                'required' => true,
                'tag' => 'employment-information',
            ],

            [
                'type' => 'date',
                'label' => 'Employment Start Date:',
                'required' => true,
                'tag' => 'employment-information',
            ],
            [
                'type' => 'file',
                'label' => 'Employment Contract:',
                'accept' => '.pdf,.doc,.docx',
                'required' => true,
                'tag' => 'employment-information',
            ],
            [
                'type' => 'number',
                'label' => 'Salary:',
                'placeholder' => 'Your monthly salary in euros',
                'required' => true,
                'tag' => 'employment-information',
            ],
            [
                'type' => 'text',
                'label' => 'Work Permit Number (Optional):',
                'tag' => 'employment-information',
            ],

            // Educational Background
            [
                'type' => 'text',
                'label' => 'Highest Level of Education::',
                'placeholder' => 'Highest Level of Education',
                'required' => true,
                'tag' => 'educational-information',
            ],
            [
                'type' => 'text',
                'label' => 'Educational Institution Name:',
                'placeholder' => 'Name of your educational institution',
                'required' => true,
                'tag' => 'educational-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Educational Institution Address:',
                'rows' => 3,
                'placeholder' => 'Address of your educational institution',
                'required' => true,
                'tag' => 'educational-information',
            ],
            [
                'type' => 'text',
                'label' => 'Degree or Diploma Earned:',
                'placeholder' => 'Your degree or diploma',
                'required' => true,
                'tag' => 'educational-information',
            ],

            // Financial Information
            [
                'type' => 'file',
                'label' => 'Bank Statements (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
                'tag' => 'financial-information',
            ],
            [
                'type' => 'file',
                'label' => 'Proof of Income (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
                'tag' => 'financial-information',
            ],
            [
                'type' => 'file',
                'label' => 'Tax Returns (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
                'tag' => 'financial-information',
            ],

            // Additional Information
            [
                'type' => 'text',
                'label' => 'Sponsor Name (Optional):',
                'placeholder' => 'Name of your sponsor',
                'tag' => 'additional-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Sponsor Address (Optional):',
                'rows' => 3,
                'placeholder' => 'Address of your sponsor',
                'tag' => 'additional-information',
            ],
            [
                'type' => 'file',
                'label' => 'Medical Certificate (Optional):',
                'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png',
                'tag' => 'additional-information',
            ],
            [
                'type' => 'file',
                'label' => 'Police Clearance Certificate (Optional):',
                'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png',
                'tag' => 'additional-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Travel History (Optional):',
                'rows' => 3,
                'placeholder' => 'Details of your travel history in the past 5 years',
                'tag' => 'additional-information',
            ],
            [
                'type' => 'textarea',
                'label' => 'Criminal Record (Optional):',
                'rows' => 3,
                'placeholder' => 'Details of any criminal record you may have',
                'tag' => 'additional-information',
            ],

            // Other
            [
                'type' => 'file',
                'label' => 'Photo (Optional):',
                'accept' => '.jpg,.jpeg,.png',
                'tag' => 'additional-information',
            ],
            [
                'type' => 'text',
                'label' => 'Declaration of Truthfulness:',
                'placeholder' => 'Declaration of Truthfulness',
                'required' => true,
                'tag' => 'additional-information',
            ],
        ];


        foreach ($formInputs as $key => &$input) {
            //generate the tag
            //generate the icon name
            $input['icon'] = '/assets/images/icon/user-2.svg';
            $input['name'] = Str::of($input['label'])->lower()->replace(' ', '_');
        }

        // store the $formInputs array in the database

        foreach ($formInputs as $forminput) {
            FormInput::create($forminput);
        }





    }
}
