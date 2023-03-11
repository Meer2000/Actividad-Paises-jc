<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;


class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country:: all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('countries.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $countries = Country::create(['id' => $request->id,
            'name' => $request->name,
        ]);
        return redirect()->route('countries.index')->with('success', 'El Pais se ha creado correctamente.');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $countries = Country::find($id);
        return view('Aprendices.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $countries = Country::find($id)->update($request->all());
        return redirect()->route('countries.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $countries = Country::find($id)->delete();
        return redirect()->route('countries.index');
    }
}
