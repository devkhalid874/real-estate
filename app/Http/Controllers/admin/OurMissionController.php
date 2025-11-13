<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OurMission;
use Illuminate\Http\Request;

class OurMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourmissions = OurMission::all();
        return view('admin.our_mission.index', compact('ourmissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.our_mission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existing = OurMission::first();

        if ($existing) {
        return redirect()
            ->route('admin.our_mission.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
       
    ]);

    $ourmission = new OurMission();
    $ourmission->title = $request->title;
    $ourmission->description = $request->description;


    $ourmission->save();

    return redirect()->route('admin.ourmission.index')->with('success', 'Section added successfully!');

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
         $ourmission = OurMission::findOrFail($id);
         return view('admin.our_mission.edit', compact('ourmission'));
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

    $ourmission = OurMission::findOrFail($id);
    $ourmission->title = $request->title;
    $ourmission->description = $request->description;

    $ourmission->save();

    return redirect()->route('admin.ourmission.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ourmission = OurMission::findOrFail($id);

    $ourmission->delete();

    return redirect()->route('admin.ourmission.index')->with('success', 'Section deleted successfully!');
    }
}
