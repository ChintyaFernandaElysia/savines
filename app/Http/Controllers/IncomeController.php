<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IncomeController extends Controller
{
	public function index()
    {
        $data = Income::all();

        $incomes = Income::oldest()->paginate(5);

        $date = Carbon::now()->format('Y-m-d');

        return view('incomes.index',compact('incomes', 'date'),[
            'title' => 'Income',
            'data' => $data
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $date = Carbon::now()->format('Y-m-d');
        return view('incomes.create', compact('date'),[
            'title' => 'Income'
        ]);
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);
      
        Income::create($request->all());
       
        return redirect()->route('incomes')
                        ->with('success','Income created successfully.');
    }
  
    public function read(Income $income)
    {
        $incomes = Income::oldest()->paginate(5);

        $date = Carbon::now()->format('Y-m-d');

        return view('incomes.read',compact('incomes', 'date'),[
            'title' => 'Income'
        ])->with('i', (request()->input('page', 1) - 1) * 5);

        // return view('incomes',compact('income'));
    }
  
    // public function edit(Income $income)
    // {
    //     return view('incomes.edit',compact('income'));
    // }

    public function details($id)
    {
        $data = Income::findOrFail($id);
        $date = Carbon::now()->format('Y-m-d');
        return view('incomes.details', compact('date'),[
            'data' => $data,
            'title' => 'Income'
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

        $data = Income::findOrFail($request->id);

        $data->title = $request->title;
        $data->amount = $request->amount;
        $data->description = $request->description;
        
        // dd($data);
        $data->save();
      
        return redirect()->route('incomes')
                        ->with('success','Income updated successfully');
    }

    public function destroy($id)
    {
        $data = Income::findOrFail($id);

        $data->delete();

        return redirect()->route('incomes')
                        ->with('success','Income deleted successfully');
    }
}
