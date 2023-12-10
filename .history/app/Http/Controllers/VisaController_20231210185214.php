<?php

namespace App\Http\Controllers;

use App\Models\FormInput;
use App\Models\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //get all form inputs that has a type of text
        // $textFormInputs = FormInput::where('type', 'text')->get();

        // Personal information
        // Passport information
        // Travel information
        // Employment information
        // Educational background
        // Financial information
        // Additional information

        //tag for 1
        $inpts = FormInput::where('tag', 'personal-information')->get();


        //tag for 2
        $inpts2 = FormInput::where('tag', 'passport-information')->get();


        //tag for 3
        $inpts3 = FormInput::where('tag', 'travel-information')->get();


        //tag for 4
        $inpts4 = FormInput::where('tag', 'employment-information')->get();


        //tag for 5
        $inpts5 = FormInput::where('tag', 'educational-information')->get();


        //tag for 6
        $inpts6 = FormInput::where('tag', 'financial-information')->get();


        //tag for 7
        $inpts7 = FormInput::where('tag', 'additional-information')->get();




        //get all the form inputs that has a type of select and tag 1

        // create an array of $tabPane

        $tabPanes = [

            // Personal information
            // Passport information
            // Travel information
            // Employment information
            // Educational background
            // Financial information
            // Additional information
            // Other

            [
                'id' => 'personal',
                'aria-labelledby' => 'personal-tab',
                'label' => 'Personal information',
                'number' => '01',
            ],


            [
                'id' => 'travel',
                'aria-labelledby' => 'travel-tab',
                'label' => 'Travel information',
                'number' => '02',

            ],


            [
                'id' => 'employment',
                'aria-labelledby' => 'employment-tab',
                'label' => 'Employment information',
                'number' => '03',
            ],


            [
                'id' => 'educational',
                'aria-labelledby' => 'educational-tab',
                'label' => 'Educational background',
                'number' => '04',
            ],


            [
                'id' => 'financial',
                'aria-labelledby' => 'financial-tab',
                'label' => 'Financial information',
                'number' => '05',
            ],


            [
                'id' => 'additional',
                'aria-labelledby' => 'additional-tab',
                'label' => 'Additional information',
                'number' => '06',
            ],


        ];




        return view('visas.create', [
            'inpts' => $inpts,
            'inpts2' => $inpts2,
            'inpts3' => $inpts3,
            'inpts4' => $inpts4,
            'inpts5' => $inpts5,
            'inpts6' => $inpts6,
            'inpts7' => $inpts7,
            'tabPanes' => $tabPanes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request , Visa $visa)
    {
        // Validation rules
        $rules = [
            // Personal information
            'user_id' => 'required|exists:users,id',
            'full_name' => 'required|string',
            'date_of_birth' => 'nullable|date',
            'place_of_birth' => 'nullable|string',
            'nationality' => 'nullable|string',
            'current_address' => 'nullable|string',
            'email_address' => 'nullable|email',
            'phone_number' => 'nullable|string',

            // Passport information
            'passport_number' => 'nullable|string',
            'passport_issue_date' => 'nullable|date',
            'passport_expiry_date' => 'nullable|date',

            // Travel information
            'intended_arrival_date' => 'nullable|date',
            'intended_duration_of_stay' => 'nullable|integer',
            'planned_entry_point' => 'nullable|string',
            'planned_exit_point' => 'nullable|string',
            'travel_insurance_information' => 'nullable|string',
            'accommodation_information' => 'nullable|string',

            // Employment information
            'employer_name' => 'nullable|string',
            'employer_address' => 'nullable|string',
            'job_title' => 'nullable|string',
            'employment_start_date' => 'nullable|date',
            'employment_contract' => 'nullable|string',
            'salary' => 'nullable|decimal',
            'work_permit_number' => 'nullable|string',

            // Educational background
            'highest_level_of_education' => 'nullable|string',
            'educational_institution_name' => 'nullable|string',
            'educational_institution_address' => 'nullable|string',
            'degree_or_diploma_earned' => 'nullable|string',

            // Financial information
            'bank_statements' => 'nullable|string',
            'proof_of_income' => 'nullable|string',
            'tax_returns' => 'nullable|string',

            // Additional information
            'sponsor_name' => 'nullable|string',
            'sponsor_address' => 'nullable|string',
            'medical_certificate' => 'nullable|string',
            'police_clearance_certificate' => 'nullable|string',
            'travel_history' => 'nullable|string',
            'criminal_record' => 'nullable|string',

            // Other
            'photo_path' => 'nullable|string',
            'declaration_of_truthfulness' => 'nullable|string',
        ];

        $validatedData = $request->validate($rules);

        // Store the visa
        $visa = new Visa($validatedData);
        $visa->save();

        // Additional logic like sending email notification or redirecting

        return response()->json([
            'message' => 'Visa application submitted successfully!',
            'visa' => $visa,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Visa $visa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visa $visa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visa $visa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visa $visa)
    {
        //
    }
}
