<?php

namespace App\Http\Controllers\admin;

use App\Models\PropertyManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = PropertyManagement::all();
        return view('admin.property_management.index', compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.property_management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $existing = PropertyManagement::first();

        if ($existing) {
        return redirect()
            ->route('admin.property_management.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }



        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $property = new PropertyManagement();
        $property->title = $request->title;
        $property->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/property_management'), $imageName);
            $property->image = $imageName;
        }

        $property->save();

        return redirect()->route('admin.property_management.index')->with('success', 'Section added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = PropertyManagement::findOrFail($id);
        return view('admin.property_management.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $property = PropertyManagement::findOrFail($id);
        $property->title = $request->title;
        $property->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/property_management'), $imageName);
            $property->image = $imageName;
        }

        $property->save();

        return redirect()->route('admin.property_management.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = PropertyManagement::findOrFail($id);

        if ($property->image && file_exists(public_path('uploads/property_management/' . $property->image))) {
            unlink(public_path('uploads/property_management/' . $property->image));
        }

        $property->delete();

        return redirect()->route('admin.property_management.index')->with('success', 'Section deleted successfully!');
    }
}
