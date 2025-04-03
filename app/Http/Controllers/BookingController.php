<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings', ['bookings' => $bookings]);
    }

    public function create()
    {
        $bookings = Booking::all();
        return view('bookings', ['bookings' => $bookings]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'date'=> 'required|date',
            'check_in' => 'required|date',
            'check_out'=> 'required|date',
            'request' => 'required|string',
            'status' => 'required|boolean',
            'room_id' => 'required|integer',
        ]);

        $bookings = new Booking();
        $bookings -> name = $validate['name'];
        $bookings -> date = $validate['date'];
        $bookings -> check_in = $validate['check_in'];
        $bookings -> check_out = $validate['check_out'];
        $bookings -> request = $validate['request'];
        $bookings -> status = $validate['status'];
        $bookings -> room_id = $validate['room_id'];

        $bookings->save();

        return ('Booking Create');
    }

    public function show(string $id){
        $bookings = Booking::findOrFail($id);
        return response()->json($bookings);
    }
    
    public function edit(string $id)
    {

    }

    public function updated(string $id){

    }

    public function destroy(string $id)
    {
        try{
            $bookings = Booking::find($id);
            $bookings = Booking::delete();
            return response()->json['message' => 'Booking delete '];
        } catch(){
            return ('Delete Booking not found');
        }
    }
}
