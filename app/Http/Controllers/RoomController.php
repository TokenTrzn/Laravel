<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms', ['rooms' => $rooms]);
    }
    public function create()
    {
        $rooms = Room::all();
        return view('rooms', ['rooms' => $rooms]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'photo' => 'required|string',
            'number' => 'required|number',
            'name' => 'required|string',
            'type' => 'required|string',
            'amenities' => 'required|string',
            'price' => 'required|string',
            'offerPrice' => 'required|string',
            'status' => 'required|string',
        ]);

        $rooms = new Room();

        $rooms ->photo = $validate['photo'];
        $rooms ->number = $validate['number'];
        $rooms ->name = $validate['name'];
        $rooms ->type = $validate['type'];
        $rooms ->amenities = $validate['amenities'];
        $rooms ->price = $validate['price'];
        $rooms ->offerPrice = $validate['offerPrice'];
        $rooms ->status = $validate['status'];

        $rooms->save();
        return ('Rooms Created');
    }
    public function show(string $id)
    {
        $rooms = Room::findOrFail($id);
        return response()->json($contacts);
    }
    public function edit(string $id)
    {

    }
    public function update(Request $request, string $id)
    {

    }
    public function destroy(string $id)
    {
        try{
            $rooms = Room::find($id);
            $rooms->delete();
            return response()->json(['message' => 'Room deleted']);
        } catch (error){
            return ('Room not found');
        }
    }
}