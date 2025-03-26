<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function create()
    {
        $users = User::create([
            'name'=>'Alberto',
            'email' => 'alberto@gmail.com',
            'password' => '1234',
        ]);
        return response()->json($users, 201);
    }

    
    public function store(Request $request)
    {      
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', 
        ]);
        
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']); 
        $user->save();
        
        return redirect()->route('activities.create')->with('success', 'User created successfully.');
    }
}
