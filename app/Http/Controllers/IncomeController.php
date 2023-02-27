<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IncomeController extends Controller
{
	public function index()
    {
        $incomes = Income::latest()->paginate(5);

        $date = Carbon::now()->format('Y-m-d');

        return view('incomes.index',compact('incomes', 'date'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::now()->format('Y-m-d');
        return view('incomes.create', compact('date'));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        return view('incomes',compact('income'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        return view('incomes.edit',compact('income'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);
      
        $income->update($request->all());
      
        return redirect()->route('incomes.index')
                        ->with('success','Income updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        $income->delete();

        return redirect()->route('incomes.index')
                        ->with('success','Income deleted successfully');
    }
}
