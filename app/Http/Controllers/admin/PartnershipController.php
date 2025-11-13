<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnerships = Partnership::all();
        return view('admin.partnership.index', compact('partnerships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.partnership.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existing = Partnership::first();

        if ($existing) {
        return redirect()
            ->route('admin.partnership.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $partnership = new Partnership();
    $partnership->title = $request->title;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/partnership'), $imageName);
        $partnership->image = $imageName;
    }

    $partnership->save();

    return redirect()->route('admin.partnership.index')->with('success', 'Section added successfully!');

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
         $partnership = Partnership::findOrFail($id);
         return view('admin.partnership.edit', compact('partnership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $partnership = Partnership::findOrFail($id);
    $partnership->title = $request->title;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/partnership'), $imageName);
        $partnership->image = $imageName;
    }

    $partnership->save();

    return redirect()->route('admin.partnership.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $partnership = Partnership::findOrFail($id);

    if ($partnership->image && file_exists(public_path('uploads/partnership/' . $partnership->image))) {
        unlink(public_path('uploads/partnership/' . $partnership->image));
    }

    $partnership->delete();

    return redirect()->route('admin.partnership.index')->with('success', 'Section deleted successfully!');
    }
}
