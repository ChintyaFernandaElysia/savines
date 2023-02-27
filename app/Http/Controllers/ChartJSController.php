<?php
  
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expense;
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
        // $users = User::select(Expense::raw("COUNT(*) as count"), Expense::raw("MONTHNAME(created_at) as month_name"))
        //             ->whereYear('created_at', date('Y'))
        //             ->groupBy(Expense::raw("month_name"))
        //             ->orderBy('id','ASC')
        //             ->pluck('count', 'month_name');

        // $labels = $users->keys();
        // $data = $users->values();

        // return view('chart', compact('labels', 'data'));
        $amount = Expense::select(Expense::raw("CAST(SUM(amount) as int) as amount"))
        ->GroupBy(Expense::raw("Month(created_at)"))
        ->pluck('amount');

        $month = Expense::select(Expense::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(Expense::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');

        return view('chart', compact('amount', 'month'));
    }
}