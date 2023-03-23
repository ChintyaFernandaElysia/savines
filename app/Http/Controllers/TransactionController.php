<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
	public function index()
    {
        $transactions = Transaction::latest()->simplePaginate(5);

        return view('transactions.index',compact('transactions'),[
            'title' => 'Transaction',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        return view('transactions.create', compact('todayDate'),[
            'title' => 'Transaction'
        ]);
    }

    public function store(Request $request)
    {
        $transactions['user_id'] = Auth::id();

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

        $data->date = $request->date;
        $data->title = $request->title;
        $data->status = $request->status;
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
