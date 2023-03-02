<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Income;


use Illuminate\Http\Request;


use App\Models\User;

use Carbon\Carbon;

class ChartJSController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    //  $data['lineChart'] = Income::select(DB::raw("COUNT(amount) as count"), DB::raw("MONTHNAME(created_at) as month_name"),DB::raw('max(created_at) as createdAt'))
    //     ->whereYear('created_at', date('Y'))
    //     ->groupBy('month_name')
    //     ->orderBy('createdAt')
    //     ->get();
 
    //     return view('chart', $data);

    $amount = Income::select(DB::raw("CAST(SUM(amount) as int) as amount"))
    ->GroupBy(DB::raw("Month(created_at)"))
    ->pluck('amount');


    $month = Income::select(DB::raw("MONTHNAME(created_at) as month"))
    ->GroupBy(DB::raw("MONTHNAME(created_at)"))
    ->pluck('month');

    return view('chart', compact('amount', 'month'));

    }

    
}