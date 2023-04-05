<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Goals;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Auth;

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
        $todayDate = Carbon::now()->format('Y-m-d');
        return view('goals.create', compact('todayDate'),[
            'title' => 'Goal'
        ]);
    }

    public function input()
    {
        $goals = DB::table('tbgoals')->get();

        $date = Date::now('America/New_York')->format('Y-m-d');

        return view('goals.input', [
            'title' => 'Goals',
            'goals' => $goals,
            'date' => $date
        ]);
    }

    public function addInput(Request $request)
    {

        $goals = DB::table('tbgoals')
        ->where('title', $request->title)
        ->sum('collected');

        $collected = $goals + $request->amount;

        DB::table('tbgoals')
        ->where('title', $request->title)
        ->update([
            'collected' => $collected,
        ]);

        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);


        Transaction::create($request->all());

        return redirect()->route('goals')
        ->with('success','Add input success.');
    }

    public function store(Request $request)
    {
        $goals['user_id'] = Auth::id();

        Goals::create($request->all());

        return redirect()->route('goals')
                        ->with('success','Goals created successfully.');
    }

    public function read(Goals $goals)
    {
        $goals = Goals::latest()->paginate(5);

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
