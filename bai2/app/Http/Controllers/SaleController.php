<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index(){
        $sales = Sale::query()
        ->select(DB::raw('SUM(total) as total_sales'),
                            DB::raw('EXTRACT(MONTH FROM sale_date) as month'),
                            DB::raw('EXTRACT(YEAR FROM sale_date) as year')) 
        ->groupBy(DB::raw('EXTRACT(MONTH FROM sale_date)'),
                            DB::raw('EXTRACT(YEAR FROM sale_date)'))->get();
        dd($sales->toArray());
        return view('index',compact('sales'));
    }
}
