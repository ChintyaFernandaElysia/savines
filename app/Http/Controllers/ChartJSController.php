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
        // $users = User::select('users.id')
        //         ->join('tbincomes', 'tbincomes.id', '=', 'users.id')
        //         ->get();
        $result = DB::select(DB::raw("select count()"))
                ->join('tbincomes', 'tbincomes.id', '=', 'users.id')
                ->get();
        return view('chart');
    }
    
}