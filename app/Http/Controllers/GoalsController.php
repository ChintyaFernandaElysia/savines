<?php

namespace App\Http\Controllers;

use App\Models\Goals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoalsController extends Controller
{
	public function index()
    {

        $goals = Goals::latest()->simplePaginate(5);

        return view('goals.index',compact('goals'),[
            'title' => 'Goals',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('goals.create',[
            'title' => 'Goals'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'target' => 'required',
            'description' => 'required',
        ]);

        Goals::create($request->all());

        return redirect()->route('goals')
                        ->with('success','Goals created successfully.');
    }

    public function read(Goals $goals)
    {
        $goals = Goals::latest()->paginate(5);

        dd($goals);


        return view('goals.read',compact('goals'),[
            'title' => 'Goals',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = Goals::findOrFail($id);

        return view('goals.details',[
            'data' => $data,
            'title' => 'Goals'
        ]);
    }

    public function update(Request $request)
    {
        $data = Goals::findOrFail($request->id);

        $data->title = $request->title;
        $data->date = $request->date;
        $data->target = $request->target;
        $data->description = $request->description;
        
        $data->save();

        return redirect()->route('goals')
                        ->with('success','Goals updated successfully');
    }

    public function destroy($id)
    {
        $data = Goals::findOrFail($id);
        
        $data->delete();

        return redirect()->route('goals')
                        ->with('success','Goals deleted successfully');
    }


}
