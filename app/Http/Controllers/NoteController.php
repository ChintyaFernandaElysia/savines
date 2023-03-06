<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
	public function index()
    {
        // $data = Income::all()->latest('id');

        // $data = DB::table('tbincomes')->latest('id');

        
        // $income = Income::latest()->paginate(5);
        
        // // dd($income);
        // $date = Carbon::now()->format('Y-m-d');

        // return view('incomes.index',[
        //     'title' => 'Income',
        // ]);




        $notes = Note::latest()->simplePaginate(5);

        $date = Carbon::now()->format('Y-m-d');

        return view('notes.index',compact('notes', 'date'),[
            'title' => 'Note',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $date = Carbon::now()->format('Y-m-d');
        return view('notes.create', compact('date'),[
            'title' => 'Note'
        ]);
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
      
        Note::create($request->all());
       
        return redirect()->route('notes')
                        ->with('success','Note created successfully.');
    }
  
    public function read(Note $note)
    {
        $notes = Note::latest()->paginate(5);

        $date = Carbon::now()->format('Y-m-d');

        return view('notes.read',compact('notes', 'date'),[
            'title' => 'Note',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = Note::findOrFail($id);
        $date = Carbon::now()->format('Y-m-d');
        return view('notes.details', compact('date'),[
            'data' => $data,
            'title' => 'Note'
        ]);
    }
  
    public function update(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'amount' => 'required',
        //     'description' => 'required',
        // ]);
      
        // $income->update($request->all());

        $data = Note::findOrFail($request->id);

        $data->title = $request->title;
        $data->amount = $request->amount;
        $data->description = $request->description;
        
        // dd($data);
        $data->save();
      
        return redirect()->route('notes')
                        ->with('success','Note updated successfully');
    }

    public function destroy($id)
    {
        $data = Note::findOrFail($id);
        // dd($data);
        
        $data->delete();

        return redirect()->route('notes')
                        ->with('success','Note deleted successfully');
    }


}
