<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\SubCounty;
use Illuminate\Http\Request;

class WardController extends Controller
{
    public function index()
    {
        $wards = Ward::with('subCounty')->get();
        return view('wards.index', compact('wards'));
    }

    public function create()
    {
        $subCounties = SubCounty::all();
        return view('wards.create', compact('subCounties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sub_county_id' => 'required|exists:sub_counties,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:wards,code',
            'ward_number' => 'nullable|integer',
        ]);

        Ward::create($request->all());

        return redirect()->route('wards.index')->with('success', 'Ward created successfully.');
    }

    public function show(Ward $ward)
    {
        return view('wards.show', compact('ward'));
    }

    public function edit(Ward $ward)
    {
        $subCounties = SubCounty::all();
        return view('wards.edit', compact('ward', 'subCounties'));
    }

    public function update(Request $request, Ward $ward)
    {
        $request->validate([
            'sub_county_id' => 'required|exists:sub_counties,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:wards,code,' . $ward->id,
            'ward_number' => 'nullable|integer',
        ]);

        $ward->update($request->all());

        return redirect()->route('wards.index')->with('success', 'Ward updated successfully.');
    }

    public function destroy(Ward $ward)
    {
        $ward->delete();

        return redirect()->route('wards.index')->with('success', 'Ward deleted successfully.');
    }
}
