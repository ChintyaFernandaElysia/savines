<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
	public function index()
    {
        $notes = Note::latest()->simplePaginate(5);
        return view('notes.index',compact('notes'),[
            'title' => 'Note',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('notes.create',[
            'title' => 'Note'
        ]);
    }

    public function store(Request $request)
    {
        $notes['user_id'] = Auth::id();

        Note::create($request->all());

        return redirect()->route('notes')
                        ->with('success','Note created successfully.');
    }

    public function read(Note $Note)
    {
        $notes = Note::latest()->paginate(5);

        dd($notes);


        return view('notes.read',compact('notes'),[
            'title' => 'Note',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = Note::findOrFail($id);

        return view('notes.details',[
            'data' => $data,
            'title' => 'Note'
        ]);
    }

    public function update(Request $request)
    {
        $data = Note::findOrFail($request->id);

        $data->date = $request->date;
        $data->title = $request->title;
        $data->description = $request->description;
        
        $data->save();

        return redirect()->route('notes')
                        ->with('success','Note updated successfully');
    }

    public function destroy($id)
    {
        $data = Note::findOrFail($id);
        
        $data->delete();

        return redirect()->route('notes')
                        ->with('success','Note deleted successfully');
    }


}
