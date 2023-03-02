<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
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

        $transactions = Transaction::latest()->paginate(5);

        $date = Carbon::now()->format('Y-m-d');

        return view('transactions',compact('transactions', 'date'),[
            'title' => 'Transaction',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $date = Carbon::now()->format('Y-m-d');
        return view('transactions.create', compact('date'),[
            'title' => 'Transaction'
        ]);
    }
  
    public function store(Request $request)
    {
        $request->validate([
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

        $date = Carbon::now()->format('Y-m-d');

        return view('transactions.read',compact('transactions', 'date'),[
            'title' => 'Transaction',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = Transaction::findOrFail($id);
        $date = Carbon::now()->format('Y-m-d');
        return view('transactions.details', compact('date'),[
            'data' => $data,
            'title' => 'Transaction'
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

        $data = Transaction::findOrFail($request->id);

        $data->title = $request->title;
        $data->amount = $request->amount;
        $data->description = $request->description;
        
        // dd($data);
        $data->save();
      
        return redirect()->route('transactions')
                        ->with('success','Transaction updated successfully');
    }

    public function destroy($id)
    {
        $data = Transaction::findOrFail($id);
        // dd($data);
        
        $data->delete();

        return redirect()->route('transactions')
                        ->with('success','Transaction deleted successfully');
    }
}
