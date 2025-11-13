<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OffPlan;
use Illuminate\Http\Request;

class OffPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $off_plan = OffPlan::all();
        return view('admin.off_plan.index', compact('off_plan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.off_plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $existing = OffPlan::first();

        if ($existing) {
        return redirect()
            ->route('admin.off_plan.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }



          $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $off_plan = new OffPlan();
    $off_plan->title = $request->title;
    $off_plan->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/off_plan'), $imageName);
        $off_plan->image = $imageName;
    }

    $off_plan->save();

    return redirect()->route('admin.off_plan.index')->with('success', 'Section added successfully!');

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
         $off_plan = OffPlan::findOrFail($id);
         return view('admin.off_plan.edit', compact('off_plan'));
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

    $off_plan = OffPlan::findOrFail($id);
    $off_plan->title = $request->title;
    $off_plan->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/off_plan'), $imageName);
        $off_plan->image = $imageName;
    }

    $off_plan->save();

    return redirect()->route('admin.off_plan.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $off_plan = OffPlan::findOrFail($id);

    if ($off_plan->image && file_exists(public_path('uploads/off_plan/' . $off_plan->image))) {
        unlink(public_path('uploads/off_plan/' . $off_plan->image));
    }

    $off_plan->delete();

    return redirect()->route('admin.off_plan.index')->with('success', 'Section deleted successfully!');
    }
}
