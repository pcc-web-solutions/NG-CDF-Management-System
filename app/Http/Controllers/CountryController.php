<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:countries,name',
            'code' => 'required|unique:countries,code|max:3',
            'iso_alpha3' => 'nullable|max:3',
            'currency' => 'nullable|max:10',
            'timezone' => 'nullable|string',
        ]);

        Country::create($request->all());

        return redirect()->route('countries.index')->with('success', 'Country created successfully.');
    }

    public function show(Country $country)
    {
        return view('countries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|unique:countries,name,' . $country->id,
            'code' => 'required|unique:countries,code,' . $country->id . '|max:3',
            'iso_alpha3' => 'nullable|max:3',
            'currency' => 'nullable|max:10',
            'timezone' => 'nullable|string',
        ]);

        $country->update($request->all());

        return redirect()->route('countries.index')->with('success', 'Country updated successfully.');
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('countries.index')->with('success', 'Country deleted successfully.');
    }
}
