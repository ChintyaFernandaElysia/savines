<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExpenseController extends Controller
{
	public function index()
    {
        $expenses = Expense::oldest()->paginate(5);

        $date = Carbon::now()->format('Y-m-d');

        return view('expenses.index',compact('expenses', 'date'))
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
        return view('expenses.create', compact('date'));
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
      
        Expense::create($request->all());
       
        return redirect()->route('expenses')
                        ->with('success','Expense created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        return view('expenses',compact('expense'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        return view('expenses.edit',compact('expense'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);

        $expense->update($request->all());

        return redirect()->route('expenses.index')
                        ->with('success','Expense updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')
                        ->with('success','Expense deleted successfully');
    }
}
