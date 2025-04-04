<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
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
            'guestName' => 'required|string',
            'orderDate' => 'required|date',
            'orderDateHour' => 'required|string',
            'checkIn' => 'required|date',
            'checkInHour' => 'required|string',
            'checkOut' => 'required|date',
            'checkOutHour' => 'required|string',
            'specialRequest' => 'required|boolean',
            'type' => 'required|string',
            'number' => 'required|number',
            'status' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'amenities' => 'required|string',
            'room_id' => 'required|number',
        ]);

        $bookings = new Booking();
        $bookings -> guestName = $validate['guestName'];
        $bookings -> orderDate = $validate['orderDate'];
        $bookings -> orderDateHour = $validate['orderDate'];
        $bookings -> checkIn = $validate['checkIn'];
        $bookings -> checkInHour = $validate['checkInHour'];
        $bookings -> checkOut = $validate['checkOut'];
        $bookings -> checkOutHour = $validate['checkOutHour'];
        $bookings -> specialRequest = $validate['specialRequest'];
        $bookings -> type = $validate['type'];
        $bookings -> number = $validate['number'];
        $bookings -> status = $validate['status'];
        $bookings -> price = $validate['price'];
        $bookings -> description = $validate['description'];
        $bookings -> amenities = $validate['amenities'];
        $bookings -> room_id = $validate['room_id'];

        $bookings->save();

        return ('Booking Created');
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
            return response()->json(['message' => 'Booking deleted']);
        } catch(error){
            return ('Booking not found');
        }
    }
}