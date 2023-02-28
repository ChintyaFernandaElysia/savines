<?php
  
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use PDF;
use DB;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        // $users = User::select(Income::raw("COUNT(*) as count"), Income::raw("MONTHNAME(created_at) as month_name"))
        //             ->whereYear('created_at', date('Y'))
        //             ->groupBy(Income::raw("month_name"))
        //             ->orderBy('id','ASC')
        //             ->pluck('count', 'month_name');

        // $labels = $users->keys();
        // $data = $users->values();

        // return view('chart', compact('labels', 'data'));
        $amount = Income::select(Income::raw("CAST(SUM(amount) as int) as amount"))
        ->GroupBy(Income::raw("Month(created_at)"))
        ->pluck('amount');

        // TEST;


        $month = Income::select(Income::raw("MONTHNAME(created_at) as month"))
        ->GroupBy(Income::raw("MONTHNAME(created_at)"))
        ->pluck('month');


        return view('dashboard', compact('amount', 'month'));
    }
}