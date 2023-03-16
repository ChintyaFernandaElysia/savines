<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DebtLoan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DebtLoanController extends Controller
{
	public function index()
    {

        $debtloan = DebtLoan::latest()->simplePaginate(5);

        // $income = DebtLoan::select('tbdebtloan')->sum('amount')->groupBy('status')->get();
        $income = DebtLoan::where('status', 'Income')->sum('amount');

        $expense = DebtLoan::where('status', 'Expense')->sum('amount');


        return view('debtloan.index',compact('debtloan','income',),[
            'title' => 'Debt/Loan',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('debtloan.create',[
            'title' => 'Debt/Loan'
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

        DebtLoan::create($request->all());

        return redirect()->route('debtloan')
                        ->with('success','Debt/Loan created successfully.');
    }

    public function read(DebtLoan $debtloan)
    {
        $debtloan = DebtLoan::latest()->paginate(5);

        dd($debtloan);


        return view('debtloan.read',compact('debtloan'),[
            'title' => 'Debt/Loan',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = DebtLoan::findOrFail($id);

        return view('debtloan.details',[
            'data' => $data,
            'title' => 'Debt/Loan'
        ]);
    }

    public function update(Request $request)
    {
        $data = DebtLoan::findOrFail($request->id);

        $data->title = $request->title;
        $data->date = $request->date;
        $data->amount = $request->amount;
        $data->description = $request->description;
        
        $data->save();

        return redirect()->route('debtloan')
                        ->with('success','Debt/Loan updated successfully');
    }

    public function destroy($id)
    {
        $data = DebtLoan::findOrFail($id);
        
        $data->delete();

        return redirect()->route('debtloan')
                        ->with('success','Debt/Loan deleted successfully');
    }


}
