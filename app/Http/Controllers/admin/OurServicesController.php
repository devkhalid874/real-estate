<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OurServices;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourservices = OurServices::all();
        return view('admin.our_services.index', compact('ourservices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.our_services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existing = OurServices::first();

        if ($existing) {
        return redirect()
            ->route('admin.ourservices.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $ourservices = new OurServices();
    $ourservices->title = $request->title;
    $ourservices->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/ourservices'), $imageName);
        $ourservices->image = $imageName;
    }

    $ourservices->save();

    return redirect()->route('admin.ourservices.index')->with('success', 'Section added successfully!');

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
         $ourservices = OurServices::findOrFail($id);
         return view('admin.our_services.edit', compact('ourservices'));
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

    $ourservices = OurServices::findOrFail($id);
    $ourservices->title = $request->title;
    $ourservices->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/ourservices'), $imageName);
        $ourservices->image = $imageName;
    }

    $ourservices->save();

    return redirect()->route('admin.ourservices.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $ourservices = OurServices::findOrFail($id);

    if ($ourservices->image && file_exists(public_path('uploads/ourservices/' . $ourservices->image))) {
        unlink(public_path('uploads/ourservices/' . $ourservices->image));
    }

    $ourservices->delete();

    return redirect()->route('admin.ourservices.index')->with('success', 'Section deleted successfully!');
    }
}
