<?php

namespace App\Http\Controllers;

use App\Models\SubCounty;
use App\Models\County;
use Illuminate\Http\Request;

class SubCountyController extends Controller
{
    public function index()
    {
        $subCounties = SubCounty::with('county')->get();
        return view('sub_counties.index', compact('subCounties'));
    }

    public function create()
    {
        $counties = County::all();
        return view('sub_counties.create', compact('counties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'county_id' => 'required|exists:counties,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:sub_counties,code',
            'sub_county_office' => 'nullable|string',
        ]);

        SubCounty::create($request->all());

        return redirect()->route('sub_counties.index')->with('success', 'Sub County created successfully.');
    }

    public function show(SubCounty $subCounty)
    {
        return view('sub_counties.show', compact('subCounty'));
    }

    public function edit(SubCounty $subCounty)
    {
        $counties = County::all();
        return view('sub_counties.edit', compact('subCounty', 'counties'));
    }

    public function update(Request $request, SubCounty $subCounty)
    {
        $request->validate([
            'county_id' => 'required|exists:counties,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:sub_counties,code,' . $subCounty->id,
            'sub_county_office' => 'nullable|string',
        ]);

        $subCounty->update($request->all());

        return redirect()->route('sub_counties.index')->with('success', 'Sub County updated successfully.');
    }

    public function destroy(SubCounty $subCounty)
    {
        $subCounty->delete();

        return redirect()->route('sub_counties.index')->with('success', 'Sub County deleted successfully.');
    }
}
