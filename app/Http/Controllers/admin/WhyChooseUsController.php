<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $whychooseus = WhyChooseUs::all();
        return view('admin.why_choose_us.index', compact('whychooseus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.why_choose_us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existing = WhyChooseUs::first();

        if ($existing) {
        return redirect()
            ->route('admin.whychooseus.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $whychooseus = new WhyChooseUs();
    $whychooseus->title = $request->title;
    $whychooseus->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/whychooseus'), $imageName);
        $whychooseus->image = $imageName;
    }

    $whychooseus->save();

    return redirect()->route('admin.whychooseus.index')->with('success', 'Section added successfully!');

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
         $whychooseus = WhyChooseUs::findOrFail($id);
         return view('admin.why_choose_us.edit', compact('whychooseus'));
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

    $whychooseus = WhyChooseUs::findOrFail($id);
    $whychooseus->title = $request->title;
    $whychooseus->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/whychooseus'), $imageName);
        $whychooseus->image = $imageName;
    }

    $whychooseus->save();

    return redirect()->route('admin.whychooseus.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $whychooseus = WhyChooseUs::findOrFail($id);

    if ($whychooseus->image && file_exists(public_path('uploads/whychooseus/' . $whychooseus->image))) {
        unlink(public_path('uploads/whychooseus/' . $whychooseus->image));
    }

    $whychooseus->delete();

    return redirect()->route('admin.whychooseus.index')->with('success', 'Section deleted successfully!');
    }
}
