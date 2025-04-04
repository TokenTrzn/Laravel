<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts',['contacts' => $contacts]);
    }
    public function create()
    {
        $contacts = Contact::all();
        return view('contacts', ['contacts' => $contacts]);
    }
    public function store(Request $request)
    {
        $validate =$request->validate([
            'date' => 'required|date',
            'hour' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'comment' => 'required|string',
            'isArchived' => 'required|boolean',
        ]);

        $contacts = new Contact();
        $contacts ->date = $validated['date'];
        $contacts ->name = $validated['name'];
        $contacts ->email = $validated['email'];
        $contacts ->phone = $validated['phone'];
        $contacts ->comment = $validated['comment'];
        $contacts ->isArchived = $validated['isArchived'];

        $contacts->save();
        return ('Contact created');
    }
    public function show(string $id)
    {
        $contacts = Contact::findOrFail($id);
        return response()->json($contacts);
    }
    public function edit(string $id)
    {
        
    }
    public function update(Request $request,string $id)
    {

    }
    public function destroy(string $id)
    {
        try {
            $contacts = Contact::find($id);
            $contacts->delete();
            return response()->json(['message' => 'Contact deleted']);
        } catch (\Throwable $th) {
            return('Contact not found');
        }
    }
}