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

        $inpts = FormInput::where('tag', '1')->get();

        $inpts2 = FormInput::where('tag', '2')->get();

        //get all the form inputs that has a type of select and tag 1



        return view('visas.create', [
            'inpts' => $inpts,
            'inpts2' => $inpts2,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
