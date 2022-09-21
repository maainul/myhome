<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Room;
use App\Models\Home;
use App\Models\Floor;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')
                ->join('homes','homes.id','=','rooms.home_id')
                ->join('floors','floors.id','=','rooms.floor_id')
                ->select('rooms.*','homes.*','floors.*')
                ->get();
        $roomRent = Room::sum('room_rent');
        return view('rooms.index',compact('rooms','roomRent'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
       $data = Floor::all();
       $home = Home::all();
        return view('rooms.create',['data'=>$data,'home'=>$home]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number'=>'required',
            'room_rent'=>'required',
            'floor_id'=>'required',
            'home_id'=>'required',
        ]);
        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success','Room created successfully.');
    }

    public function show(Room $room)
    {
        return view('rooms.show',compact('room'));
    }

    public function edit(Room $room)
    {
        $data = Floor::all();
        $home = Home::all();
        return view('rooms.edit',compact('room','data','home'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'room_number'=>'required',
            'room_rent'=>'required',
            'floor_id'=>'required',
            'home_id'=>'required',
        ]);
        $room->update($request->all());
        return redirect()->route('rooms.index')->with('success','Room update successfully');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('success','Room deleted successfully');
    }
}
