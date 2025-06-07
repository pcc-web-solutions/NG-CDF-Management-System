<?php

namespace App\Http\Controllers;

use App\Models\SubLocation;
use App\Models\Location;
use Illuminate\Http\Request;

class SubLocationController extends Controller
{
    public function index()
    {
        $subLocations = SubLocation::with('location')->get();
        return view('sub_locations.index', compact('subLocations'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('sub_locations.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:sub_locations,code',
            'assistant_chief' => 'nullable|string',
        ]);

        SubLocation::create($request->all());

        return redirect()->route('sub_locations.index')->with('success', 'Sub Location created successfully.');
    }

    public function show(SubLocation $subLocation)
    {
        return view('sub_locations.show', compact('subLocation'));
    }

    public function edit(SubLocation $subLocation)
    {
        $locations = Location::all();
        return view('sub_locations.edit', compact('subLocation', 'locations'));
    }

    public function update(Request $request, SubLocation $subLocation)
    {
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'name' => 'required|string',
            'code' => 'nullable|unique:sub_locations,code,' . $subLocation->id,
            'assistant_chief' => 'nullable|string',
        ]);

        $subLocation->update($request->all());

        return redirect()->route('sub_locations.index')->with('success', 'Sub Location updated successfully.');
    }

    public function destroy(SubLocation $subLocation)
    {
        $subLocation->delete();

        return redirect()->route('sub_locations.index')->with('success', 'Sub Location deleted successfully.');
    }
}
