<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DebtLoan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DebtLoanController extends Controller
{
	public function index()
    {
        $debtloan = DebtLoan::latest()->simplePaginate(5);

        return view('debtloan.index',compact('debtloan'),[
            'title' => 'Debt/Loan',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        return view('debtloan.create', compact('todayDate'),[
            'title' => 'Debt / Loan'
        ]);
		
    }

    public function store(Request $request)
    {
        $debtandloan['user_id'] = Auth::id();

        DebtLoan::create($request->all());

        return redirect()->route('debtloan')
                        ->with('success','Data created successfully.');
    }

    public function read(DebtLoan $debt)
    {
        $debt = DebtLoan::latest()->paginate(5);

        return view('debtloan.read',compact('debt'),[
            'title' => 'Debt/Loan',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = DebtLoan::findOrFail($id);
        return view('debtloan.details', compact('data'));
    }

    public function update(Request $request)
    {
        $data = DebtLoan::findOrFail($request->id);
        $data->date = $request->date;
        $data->due_date = $request->due_date;
        $data->title = $request->title;
        $data->status = $request->status;
        $data->amount = $request->amount;
        $data->description = $request->description;
        $data->person_name = $request->person_name;
        $data->person_telp = $request->person_telp;
        $data->person_address = $request->person_address;
        $data->tracking = $request->tracking;
        $data->save();

        return redirect()->route('debtloan')
                        ->with('success','Data updated successfully');
    }

    public function destroy($id)
    {
        $data = DebtLoan::findOrFail($id);
        
        $data->delete();

        return redirect()->route('debtloan')
                        ->with('success','Debt/Loan deleted successfully');
    }


}
