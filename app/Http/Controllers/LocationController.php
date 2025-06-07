<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Ward;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::with('ward')->get();
        return view('locations.index', compact('locations'));
    }

    public function create()
    {
        $wards = Ward::all();
        return view('locations.create', compact('wards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ward_id' => 'required|exists:wards,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:locations,code',
            'chief' => 'nullable|string',
        ]);

        Location::create($request->all());

        return redirect()->route('locations.index')->with('success', 'Location created successfully.');
    }

    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    public function edit(Location $location)
    {
        $wards = Ward::all();
        return view('locations.edit', compact('location', 'wards'));
    }

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'ward_id' => 'required|exists:wards,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:locations,code,' . $location->id,
            'chief' => 'nullable|string',
        ]);

        $location->update($request->all());

        return redirect()->route('locations.index')->with('success', 'Location updated successfully.');
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Location deleted successfully.');
    }
}
