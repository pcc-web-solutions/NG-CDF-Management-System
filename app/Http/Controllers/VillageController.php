<?php

namespace App\Http\Controllers;

use App\Models\Village;
use App\Models\SubLocation;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index()
    {
        $villages = Village::with('subLocation')->get();
        return view('villages.index', compact('villages'));
    }

    public function create()
    {
        $subLocations = SubLocation::all();
        return view('villages.create', compact('subLocations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sub_location_id' => 'required|exists:sub_locations,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:villages,code',
        ]);

        Village::create($request->all());

        return redirect()->route('villages.index')->with('success', 'Village created successfully.');
    }

    public function show(Village $village)
    {
        return view('villages.show', compact('village'));
    }

    public function edit(Village $village)
    {
        $subLocations = SubLocation::all();
        return view('villages.edit', compact('village', 'subLocations'));
    }

    public function update(Request $request, Village $village)
    {
        $request->validate([
            'sub_location_id' => 'required|exists:sub_locations,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:villages,code,' . $village->id,
        ]);

        $village->update($request->all());

        return redirect()->route('villages.index')->with('success', 'Village updated successfully.');
    }

    public function destroy(Village $village)
    {
        $village->delete();

        return redirect()->route('villages.index')->with('success', 'Village deleted successfully.');
    }
}
