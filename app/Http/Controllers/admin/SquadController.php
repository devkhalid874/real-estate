<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Squad;
use Illuminate\Http\Request;

class SquadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $squads = Squad::all();
        return view('admin.squad.index', compact('squads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.squad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $squad = new Squad();
    $squad->name = $request->name;
    $squad->designation = $request->designation;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/squad'), $imageName);
        $squad->image = $imageName;
    }

    $squad->save();

    return redirect()->route('admin.squad.index')->with('success', 'Section added successfully!');

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
         $squad = Squad::findOrFail($id);
         return view('admin.squad.edit', compact('squad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $squad = Squad::findOrFail($id);
    $squad->name = $request->name;
    $squad->designation = $request->designation;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/squad'), $imageName);
        $squad->image = $imageName;
    }

    $squad->save();

    return redirect()->route('admin.squad.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $squad = Squad::findOrFail($id);

    if ($squad->image && file_exists(public_path('uploads/squad/' . $squad->image))) {
        unlink(public_path('uploads/squad/' . $squad->image));
    }

    $squad->delete();

    return redirect()->route('admin.squad.index')->with('success', 'Section deleted successfully!');
    }
}
