<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Controller\Request;

class Resource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Hola";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activity = Activity::create([
            'type -> surf',
            'user_id -> 1',
            'datetime -> 2025-03-24',
            'paid -> false',
            'notes -> Good Activity',
            'satisfaction -> 8'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
