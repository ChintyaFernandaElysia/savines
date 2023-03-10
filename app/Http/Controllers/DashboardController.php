<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = Transaction::select(DB::raw("SUM(amount) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("month_name"))
        ->orderBy('id','ASC')
        ->pluck('count', 'month_name');

        $labels = $users->keys();
        $data = $users->values();

        $income = Transaction::get()->where('status', 'Income')->sum('amount');

        $expense = Transaction::get()->where('status', 'Expense')->sum('amount');

        $savings = $income - $expense;

        $latestExpense = Transaction::where('status', 'Expense')->latest()->first();

        $notes = Note::latest()->first();
        
        $incomeThisMonth = Transaction::where('status','Income')->whereMonth('created_at', date('m'))->sum('amount');
        
        $expenseThisMonth = Transaction::where('status','Expense')->whereMonth('created_at', date('m'))->sum('amount');

        return view('dashboard', compact('labels', 'data', 'income', 'expense', 'savings','notes','incomeThisMonth','expenseThisMonth','latestExpense'), ['title' => 'Dashboard']);

        // $amount = Income::select(DB::raw("CAST(SUM(amount) as int) as amount"))
        // ->GroupBy(DB::raw("Month(created_at)"))
        // ->pluck('amount');


        // $month = Income::select(DB::raw("MONTHNAME(created_at) as month"))
        // ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        // ->pluck('month');

        // return view('dashboard', compact('amount', 'month'));

        
    }
}
