<?php

namespace App\Http\Controllers\admin;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = AboutSection::all();
        return view('admin.about_section.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.about_section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existing = AboutSection::first();

        if ($existing) {
        return redirect()
            ->route('admin.about.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $about = new AboutSection();
    $about->title = $request->title;
    $about->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/about'), $imageName);
        $about->image = $imageName;
    }

    $about->save();

    return redirect()->route('admin.about.index')->with('success', 'Section added successfully!');

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
         $about = AboutSection::findOrFail($id);
         return view('admin.about_section.edit', compact('about'));
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

    $about = AboutSection::findOrFail($id);
    $about->title = $request->title;
    $about->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/about'), $imageName);
        $about->image = $imageName;
    }

    $about->save();

    return redirect()->route('admin.about.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $about = AboutSection::findOrFail($id);

    if ($about->image && file_exists(public_path('uploads/about/' . $about->image))) {
        unlink(public_path('uploads/about/' . $about->image));
    }

    $about->delete();

    return redirect()->route('admin.about.index')->with('success', 'Section deleted successfully!');
    }
}
