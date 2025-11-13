<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\InvestDubai;
use Illuminate\Http\Request;

class InvestDubaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investdubai = InvestDubai::all();
        return view('admin.invest_dubai.index', compact('investdubai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.invest_dubai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existing = InvestDubai::first();

        if ($existing) {
        return redirect()
            ->route('admin.investdubai.index')
            ->with('error', 'Only one record allowed. Please update or delete the existing one.');
    }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $investdubai = new InvestDubai();
    $investdubai->title = $request->title;
    $investdubai->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/investdubai'), $imageName);
        $investdubai->image = $imageName;
    }

    $investdubai->save();

    return redirect()->route('admin.investdubai.index')->with('success', 'Section added successfully!');

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
         $investdubai = InvestDubai::findOrFail($id);
         return view('admin.invest_dubai.edit', compact('investdubai'));
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

    $investdubai = InvestDubai::findOrFail($id);
    $investdubai->title = $request->title;
    $investdubai->description = $request->description;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/investdubai'), $imageName);
        $investdubai->image = $imageName;
    }

    $investdubai->save();

    return redirect()->route('admin.investdubai.index')->with('success', 'Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $investdubai = InvestDubai::findOrFail($id);

    if ($investdubai->image && file_exists(public_path('uploads/investdubai/' . $investdubai->image))) {
        unlink(public_path('uploads/investdubai/' . $investdubai->image));
    }

    $investdubai->delete();

    return redirect()->route('admin.investdubai.index')->with('success', 'Section deleted successfully!');
    }
}
