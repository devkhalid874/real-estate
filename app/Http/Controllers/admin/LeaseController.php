<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lease = Lease::all();
        return view('admin.lease.index', compact('lease'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.lease.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

             $existing = Lease::first();

        if ($existing) {
        return redirect()
            ->route('admin.lease.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $lease = new Lease();
    $lease->title = $request->title;
    $lease->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/lease'), $imageName);
        $lease->image = $imageName;
    }

    $lease->save();

    return redirect()->route('admin.lease.index')->with('success', 'Section added successfully!');

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
         $lease = Lease::findOrFail($id);
         return view('admin.lease.edit', compact('lease'));
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

    $lease = Lease::findOrFail($id);
    $lease->title = $request->title;
    $lease->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/lease'), $imageName);
        $lease->image = $imageName;
    }

    $lease->save();

    return redirect()->route('admin.lease.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $lease = Lease::findOrFail($id);

    if ($lease->image && file_exists(public_path('uploads/lease/' . $lease->image))) {
        unlink(public_path('uploads/lease/' . $lease->image));
    }

    $lease->delete();

    return redirect()->route('admin.lease.index')->with('success', 'Section deleted successfully!');
    }
}
