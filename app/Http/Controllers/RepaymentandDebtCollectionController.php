<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RepaymentandDebtCollection;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class RepaymentandDebtCollectionController extends Controller
{
	public function index()
    {

        $repaymentanddebtcollection = RepaymentandDebtCollection::latest()->simplePaginate(5);


        return view('repaymentanddebtcollection.index',compact('repaymentanddebtcollection'),[
            'title' => 'Repayment / Debt Collection',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('repaymentanddebtcollection.create',[
            'title' => 'Repayment / Debt Collection'
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

        RepaymentandDebtCollection::create($request->all());

        return redirect()->route('repaymentanddebtcollection')
                        ->with('success','Repayment / Debt Collection created successfully.');
    }

    public function read(RepaymentandDebtCollection $repaymentanddebtcollection)
    {
        $repaymentanddebtcollection = RepaymentandDebtCollection::latest()->paginate(5);

        dd($repaymentanddebtcollection);


        return view('repaymentanddebtcollection.read',compact('repaymentanddebtcollection'),[
            'title' => 'Repayment / Debt Collection',
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function details($id)
    {
        $data = RepaymentandDebtCollection::findOrFail($id);

        return view('repaymentanddebtcollection.details',[
            'data' => $data,
            'title' => 'Repayment / Debt Collection'
        ]);
    }

    public function update(Request $request)
    {
        $data = RepaymentandDebtCollection::findOrFail($request->id);

        $data->title = $request->title;
        $data->date = $request->date;
        $data->amount = $request->amount;
        $data->description = $request->description;
        
        $data->save();

        return redirect()->route('repaymentanddebtcollection')
                        ->with('success','Repayment / Debt Collection updated successfully');
    }

    public function destroy($id)
    {
        $data = RepaymentandDebtCollection::findOrFail($id);
        
        $data->delete();

        return redirect()->route('repaymentanddebtcollection')
                        ->with('success','Repayment / Debt Collection deleted successfully');
    }


}
