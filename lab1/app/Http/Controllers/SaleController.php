<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use App\Models\FinancialReport;
use App\Models\Sale;
use App\Models\taxec;
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
        // dd($sales->toArray());

        $expenses = Expenses::query()
        ->select(DB::raw('SUM(amount) as total_expenses'),
                            DB::raw('EXTRACT(MONTH FROM expense_date) as month'),
                            DB::raw('EXTRACT(YEAR FROM expense_date) as year')) 
        ->groupBy(DB::raw('EXTRACT(MONTH FROM expense_date)'),
                            DB::raw('EXTRACT(YEAR FROM expense_date)'))->get();

        // dd($expenses->toArray());

       

        $total_sales_array = Sale::query()
        ->select(DB::raw('SUM(total)'))
        ->where(DB::raw('EXTRACT(MONTH FROM sale_date)'),9)
        ->where(DB::raw('EXTRACT(YEAR FROM sale_date)'),2024)
        ->get();

        // dd($total_sales_array->toArray());
        $total_sales = (float)$total_sales_array[0]["SUM(total)"];
        // dd($total_sales);
        $total_expenses_array = Expenses::query()
        ->select(DB::raw('SUM(amount)'))
        ->where(DB::raw('EXTRACT(MONTH FROM expense_date)'),9)
        ->where(DB::raw('EXTRACT(YEAR FROM expense_date)'),2024)->get();
        //  dd($total_expenses_array->toArray());

        $total_expenses = (float)$total_expenses_array[0]["SUM(amount)"];
        // dd($total_expenses);

        $profit_before_tax = $total_sales - $total_expenses;
        // dd($profit_before_tax);

        $tax_rate = taxec::query()->select('rate')->where('tax_name', 'VAT')->get();
        //  dd($tax_rate->toArray());

        $tax_rate_array = (float)$tax_rate[0]["rate"];
        // dd($tax_rate_array);

        $tax_amount = $total_sales * $tax_rate_array/100;
        // dd($tax_amount);

        $profit_after_tax = $profit_before_tax - $tax_amount;
        // dd($profit_after_tax);

        DB::table('financial_reposts')->insert([
            'month' => 9,
            'year' => 2024,
            'total_sales' => $total_sales,
            'total_expenses' => $total_expenses,
            'profit_before_tax' => $profit_before_tax,
            'tax_amount' => $tax_amount,
            'profit_after_tax' => $profit_after_tax,
            'created_at'=>NOW(),
            'updated_at'=>NOW()
        ]);


        return view('index',compact('expenses','sales'));
    }
}
