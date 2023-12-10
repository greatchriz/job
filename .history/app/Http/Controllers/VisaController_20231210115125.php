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

        //tag for 1
        $inpts = FormInput::where('tag', '1')->get();

        //tag for 2
        $inpts2 = FormInput::where('tag', '2')->get();

        //tag for 3
        $inpts3 = FormInput::where('tag', '3')->get();

        //tag for 4
        $inpts4 = FormInput::where('tag', '4')->get();

        //tag for 5
        $inpts5 = FormInput::where('tag', '5')->get();

        //tag for 6
        $inpts6 = FormInput::where('tag', '6')->get();

        //tag for 7
        $inpts7 = FormInput::where('tag', '7')->get();


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
            ],


            [
                'id' => 'passport',
                'aria-labelledby' => 'passport-tab',
                'label' => 'Passport information',
            ],


            [
                'id' => 'travel',
                'aria-labelledby' => 'travel-tab',
                'label' => 'Travel information',
            ],


            [
                'id' => 'employment',
                'aria-labelledby' => 'employment-tab',
                'label' => 'Employment information',
            ],


            [
                'id' => 'educational',
                'aria-labelledby' => 'educational-tab',
                'label' => 'Educational background',
            ],


            [
                'id' => 'financial',
                'aria-labelledby' => 'financial-tab',
                'label' => 'Financial information',
            ],


            [
                'id' => 'additional',
                'aria-labelledby' => 'additional-tab',
                'label' => 'Additional information',
            ],


            [
                'id' => 'other',
                'aria-labelledby' => 'other-tab',
                'label' => 'Other',
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
            'inpts8' => $inpts8,
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
