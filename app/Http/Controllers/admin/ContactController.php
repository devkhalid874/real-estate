<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'address' => 'required|string|max:255',
            'phone'   => 'required|string', 
            'email'   => 'required|email|max:255',
        ]);

        $contact = new Contact();
        $contact->address = $request->address;
        $contact->phone   = $request->phone; 
        $contact->email   = $request->email;
        $contact->save();

        return redirect()->route('admin.contact.index')->with('success', 'Contact section added successfully!');
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
         $contact = Contact::findOrFail($id);
          return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'address' => 'required|string|max:255',
            'phone'   => 'required|string',
            'email'   => 'required|email|max:255',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->address = $request->address;
        $contact->phone   = $request->phone;
        $contact->email   = $request->email;
        $contact->save();

        return redirect()->route('admin.contact.index')->with('success', 'Contact section updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Contact section deleted successfully!');

    }
}
