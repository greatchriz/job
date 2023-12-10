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
                'id' => 'passport',
                'aria-labelledby' => 'passport-tab',
                'label' => 'Passport information',
                'number' => '02',

            ],


            [
                'id' => 'travel',
                'aria-labelledby' => 'travel-tab',
                'label' => 'Travel information',
                'number' => '03',

            ],


            [
                'id' => 'employment',
                'aria-labelledby' => 'employment-tab',
                'label' => 'Employment information',
                'number' => '04',
            ],


            [
                'id' => 'educational',
                'aria-labelledby' => 'educational-tab',
                'label' => 'Educational background',
                'number' => '05',
            ],


            [
                'id' => 'financial',
                'aria-labelledby' => 'financial-tab',
                'label' => 'Financial information',
                'number' => '06',
            ],


            [
                'id' => 'additional',
                'aria-labelledby' => 'additional-tab',
                'label' => 'Additional information',
                'number' => '07',
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
            'tabPanes' => $tabPanes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
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
