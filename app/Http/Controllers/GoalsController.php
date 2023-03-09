<?php

namespace App\Http\Controllers;

use App\Models\Goals;
use App\Models\Transaction;
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
            'amount' => 'required',
            'description' => 'required',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions')
                        ->with('success','Transaction created successfully.');
    }

    public function read(Transaction $transaction)
    {
        $transactions = Transaction::latest()->paginate(5);

        dd($transactions);


        return view('transactions.read',compact('transactions'),[
            'title' => 'Transaction',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = Transaction::findOrFail($id);

        return view('transactions.details',[
            'data' => $data,
            'title' => 'Transaction'
        ]);
    }

    public function update(Request $request)
    {
        $data = Transaction::findOrFail($request->id);

        $data->title = $request->title;
        $data->date = $request->date;
        $data->amount = $request->amount;
        $data->description = $request->description;
        
        $data->save();

        return redirect()->route('transactions')
                        ->with('success','Transaction updated successfully');
    }

    public function destroy($id)
    {
        $data = Transaction::findOrFail($id);
        
        $data->delete();

        return redirect()->route('transactions')
                        ->with('success','Transaction deleted successfully');
    }


}
