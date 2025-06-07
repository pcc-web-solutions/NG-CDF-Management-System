<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Country;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function index()
    {
        $counties = County::with('country')->get();
        return view('counties.index', compact('counties'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('counties.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:counties,code',
            'county_number' => 'nullable|integer|unique:counties,county_number',
            'capital' => 'nullable|string',
            'governor' => 'nullable|string',
        ]);

        County::create($request->all());

        return redirect()->route('counties.index')->with('success', 'County created successfully.');
    }

    public function show(County $county)
    {
        return view('counties.show', compact('county'));
    }

    public function edit(County $county)
    {
        $countries = Country::all();
        return view('counties.edit', compact('county', 'countries'));
    }

    public function update(Request $request, County $county)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:counties,code,' . $county->id,
            'county_number' => 'nullable|integer|unique:counties,county_number,' . $county->id,
            'capital' => 'nullable|string',
            'governor' => 'nullable|string',
        ]);

        $county->update($request->all());

        return redirect()->route('counties.index')->with('success', 'County updated successfully.');
    }

    public function destroy(County $county)
    {
        $county->delete();

        return redirect()->route('counties.index')->with('success', 'County deleted successfully.');
    }
}
