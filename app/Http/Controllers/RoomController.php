<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Type;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->paginate(env('PER_PAGE'));

        return view('room.index', compact('rooms'));
    }

    public function create()
    {
        $types = Type::all();

        return view('room.create', compact('types'));
    }

    public function store()
    {
        Room::create([
            'name' => request('name'),
            'slug' => str_slug(request('slug')),
            'information' => request('information'),
            'type_id'=> request('type_id')
        ]);

        return redirect()->route('room.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Room $room)
    {
        $types = Type::all();

        return view('room.edit', compact('room', 'types'));
    }

    public function update(Room $room)
    {
        $room->update([
            'name' =>request('name'),
            'type_id' => request('type_id'),
            'information' =>request('information')
        ]);

        return redirect()->route('room.index');
    }

    public function show(Room $room)
    {
        return view('room.show', compact('room'));
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('room.index');
    }
}
