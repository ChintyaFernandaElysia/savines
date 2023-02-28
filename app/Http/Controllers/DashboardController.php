<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $users = Expense::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("month_name"))
        ->orderBy('id','ASC')
        ->pluck('count', 'month_name');

        $labels = $users->keys();
        $data = $users->values();


        

        // dd($users);

        return view('dashboard', compact('labels', 'data'), [
               'title' => 'Dashboard', 
            ]);
        // return view('dashboard');
    }
    // public function chart()
    // {
    //     $users = Income::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
    //                 ->whereYear('created_at', date('Y'))
    //                 ->groupBy(DB::raw("month_name"))
    //                 ->orderBy('id','ASC')
    //                 ->pluck('count', 'month_name');

    //     $labels = $users->keys();
    //     $data = $users->values();

    //     // dd($users);

    //     return view('chart', compact('labels', 'data'));
    // }
}
