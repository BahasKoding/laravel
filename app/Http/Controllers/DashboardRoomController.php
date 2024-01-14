<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class DashboardRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.room.index',[
            'rooms' => Room::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'RoomNumber'        => 'required',
            'RoomType'          => 'required',
            'PricePerNight'     => 'required',
        ]);
    
        Room::create($data);
        return redirect('/dashboard/room/index')->with('success', "Data has been Added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('dashboard.room.edit',[
            'room'  => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $data = $request->validate([
            'RoomNumber'        => 'required',
            'RoomType'          => 'required',
            'PricePerNight'     => 'required',
        ]);
    
        $room->update($data);
        return redirect('/dashboard/room/index')->with('success', "Data has been Updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect('/dashboard/room/index')->with('success',"Data has been Deleted!");
    }
}
