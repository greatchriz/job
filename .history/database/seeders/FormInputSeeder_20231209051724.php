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
                'type' => 'text',
                'label' => 'Full Name:',
                'placeholder' => 'Your full name',
                'required' => true,
            ],
            [
                'type' => 'date',
                'label' => 'Date of Birth:',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Place of Birth:',
                'placeholder' => 'Your place of birth',
                'required' => true,
            ],
            [
                'type' => 'select',
                'label' => 'Nationality:',
                'options' => [
                    'Nigeria' => 'yes',
                    'Ghana' => 'yes',
                    'South Africa' => 'yes',
                    'Uganda' => 'yes',
                    'Rwanda' => 'yes',
                ],
                'required' => true,
            ],
            [
                'type' => 'textarea',
                'label' => 'Current Address:',
                'rows' => 3,
                'required' => true,
            ],
            [
                'type' => 'email',
                'label' => 'Email Address:',
                'placeholder' => 'Your email address',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Phone Number:',
                'placeholder' => 'Your phone number',
                'required' => true,
            ],

            // Passport Information
            [
                'type' => 'text',
                'label' => 'Passport Number:',
                'placeholder' => 'Your passport number',
                'required' => true,
            ],
            [
                'type' => 'date',
                'label' => 'Passport Issue Date:',
                'required' => true,
            ],
            [
                'type' => 'date',
                'label' => 'Passport Expiry Date:',
                'required' => true,
            ],

            // Travel Information
            [
                'type' => 'date',
                'label' => 'Intended Arrival Date:',
                'required' => true,
            ],
            [
                'type' => 'number',
                'label' => 'Intended Duration of Stay:',
                'placeholder' => 'Number of days',
                'min' => 1,
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Planned Entry Point:',
                'placeholder' => 'Airport or border crossing',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Planned Exit Point:',
                'placeholder' => 'Airport or border crossing',
                'required' => true,
            ],
            [
                'type' => 'textarea',
                'label' => 'Travel Insurance Information:',
                'rows' => 3,
                'placeholder' => 'Details of your travel insurance',
                'required' => true,
            ],
            [
                'type' => 'textarea',
                'label' => 'Accommodation Information:',
                'rows' => 3,
                'placeholder' => 'Details of your accommodation',
                'required' => true,
            ],

            // Employment Information
            [
                'type' => 'text',
                'label' => 'Employer Name:',
                'placeholder' => 'Name of your employer',
                'required' => true,
            ],
            [
                'type' => 'textarea',
                'label' => 'Employer Address:',
                'rows' => 3,
                'placeholder' => 'Address of your employer',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Job Title:',
                'placeholder' => 'Your job title in Estonia',
                'required' => true,
            ],

            [
                'type' => 'date',
                'label' => 'Employment Start Date:',
                'required' => true,
            ],
            [
                'type' => 'file',
                'label' => 'Employment Contract:',
                'accept' => '.pdf,.doc,.docx',
                'required' => true,
            ],
            [
                'type' => 'number',
                'label' => 'Salary:',
                'placeholder' => 'Your monthly salary in euros',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Work Permit Number (Optional):',
            ],

            // Educational Background
            [
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
            [
                'type' => 'text',
                'label' => 'Educational Institution Name:',
                'placeholder' => 'Name of your educational institution',
                'required' => true,
            ],
            [
                'type' => 'textarea',
                'label' => 'Educational Institution Address:',
                'rows' => 3,
                'placeholder' => 'Address of your educational institution',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Degree or Diploma Earned:',
                'placeholder' => 'Your degree or diploma',
                'required' => true,
            ],

            // Financial Information
            [
                'type' => 'file',
                'label' => 'Bank Statements (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
            ],
            [
                'type' => 'file',
                'label' => 'Proof of Income (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
            ],
            [
                'type' => 'file',
                'label' => 'Tax Returns (Optional):',
                'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
            ],

            // Additional Information
            [
                'type' => 'text',
                'label' => 'Sponsor Name (Optional):',
                'placeholder' => 'Name of your sponsor',
            ],
            [
                'type' => 'textarea',
                'label' => 'Sponsor Address (Optional):',
                'rows' => 3,
                'placeholder' => 'Address of your sponsor',
            ],
            [
                'type' => 'file',
                'label' => 'Medical Certificate (Optional):',
                'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png',
            ],
            [
                'type' => 'file',
                'label' => 'Police Clearance Certificate (Optional):',
                'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png',
            ],
            [
                'type' => 'textarea',
                'label' => 'Travel History (Optional):',
                'rows' => 3,
                'placeholder' => 'Details of your travel history in the past 5 years',
            ],
            [
                'type' => 'textarea',
                'label' => 'Criminal Record (Optional):',
                'rows' => 3,
                'placeholder' => 'Details of any criminal record you may have',
            ],

            // Other
            [
                'type' => 'file',
                'label' => 'Photo (Optional):',
                'accept' => '.jpg,.jpeg,.png',
            ],
            [
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


        foreach ($formInputs as $key => &$input) {
            //generate the tag
            $input['tag'] = 'Personal Information';

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
