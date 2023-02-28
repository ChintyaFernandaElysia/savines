<?php
  
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use PDF;
use Illuminate\Support\Facades\DB;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $incomes = Income::select(
                        DB::raw('SUM(click) as total_click'), 
                        DB::raw('SUM(viewer) as total_viewer')
                    )
                    ->orderBy(DB::raw("YEAR(created_at)"))
                    ->groupBy(DB::raw("YEAR(created_at)"))
                    ->get();

        $result[] = ['Clicks','Viewers'];
        foreach ($incomes as $key => $value) {
            $result[++$key] = ["Clicks", (int)$value->total_click];
            $result[++$key] = ["Views", (int)$value->total_viewer];
        }

        return view('chart', compact('result'));
    }
    
}