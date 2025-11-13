<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OurVision;
use Illuminate\Http\Request;

class OurVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourvisions = OurVision::all();
        return view('admin.our_vision.index', compact('ourvisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.our_vision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existing = OurVision::first();

        if ($existing) {
        return redirect()
            ->route('admin.ourvision.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
       
    ]);

    $ourvision = new OurVision();
    $ourvision->title = $request->title;
    $ourvision->description = $request->description;


    $ourvision->save();

    return redirect()->route('admin.ourvision.index')->with('success', 'Section added successfully!');

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
         $ourvision = OurVision::findOrFail($id);
         return view('admin.our_vision.edit', compact('ourvision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string'
    ]);

    $ourvision = OurVision::findOrFail($id);
    $ourvision->title = $request->title;
    $ourvision->description = $request->description;

    $ourvision->save();

    return redirect()->route('admin.ourvision.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ourvision = OurVision::findOrFail($id);

    $ourvision->delete();

    return redirect()->route('admin.ourvision.index')->with('success', 'Section deleted successfully!');
    }
}
