<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BuyingSelling;
use Illuminate\Http\Request;

class BuyingSellingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $buying_selling = BuyingSelling::all();
        return view('admin.buying_selling.index', compact('buying_selling'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.buying_selling.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

             $existing = BuyingSelling::first();

        if ($existing) {
        return redirect()
            ->route('admin.buying_selling.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

          $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $buying_selling = new BuyingSelling();
    $buying_selling->title = $request->title;
    $buying_selling->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/buying_selling'), $imageName);
        $buying_selling->image = $imageName;
    }

    $buying_selling->save();

    return redirect()->route('admin.buying_selling.index')->with('success', 'Section added successfully!');

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
         $buying_selling = BuyingSelling::findOrFail($id);
         return view('admin.buying_selling.edit', compact('buying_selling'));
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

    $buying_selling = BuyingSelling::findOrFail($id);
    $buying_selling->title = $request->title;
    $buying_selling->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/buying_selling'), $imageName);
        $buying_selling->image = $imageName;
    }

    $buying_selling->save();

    return redirect()->route('admin.buying_selling.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buying_selling = BuyingSelling::findOrFail($id);

    if ($buying_selling->image && file_exists(public_path('uploads/buying_selling/' . $buying_selling->image))) {
        unlink(public_path('uploads/buying_selling/' . $buying_selling->image));
    }

    $buying_selling->delete();

    return redirect()->route('admin.buying_selling.index')->with('success', 'Section deleted successfully!');
    }
}
