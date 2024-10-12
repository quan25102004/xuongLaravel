<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\select;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cau1',function () {
    $query = DB::table('users as u')
    ->select('u.name', DB::raw("sum(o.amount) as total_spent"))
    ->join('orders as o', 'u.id','=','o.user_id')
    ->groupBy('u.name')
    ->having('total_spent','>',1000)->toRawSql();

    dd($query);
});

Route::get('/cau2', function ()  {
    $query = DB::table('orders as o')
    ->select('o.order_date as date', DB::raw("count(*) as order_count"), DB::raw("Sum(total_amount) as total_sales"))
    ->whereBetween('o.order_date',['2000-01-01','2024-09-30'])
    ->GroupBy('date')->toRawSql();
    dd($query);
});
Route::get('/cau3', function ()  {
    $query = DB::table('products as p')
    ->select('product_name')
    ->whereNotExists(
        DB::table('order__items as o')
        ->select('o.id')
        ->where('o.product_id','=','p.id')
    )->toRawSql();

    dd($query);
});


Route::get('/cau4', action: function () {
    $products = DB::table('sales')
        ->select('product_id', DB::raw('SUM(quantity) AS total_sold'))
        ->groupBy('product_id')
        ->having('total_sold', '>', 100)
        ->pluck('product_id');
    dd( $products);
});

Route::get('/cau5', function () {
    $query = DB::table('users as u')
    ->select('u.name','p.product_name','o.order_date')
    ->join('orders as o','u.id', '=','o.user_id')
    ->join('order__items as oi', 'o.id','=','oi.order_id')
    ->join('products as p','p.id','=','oi.product_id')
    ->where('o.order_date','>=',DB::raw("NOW() - INTERVAL 30 DAY"));
    dd($query);
});

Route::get('/cau6', function () {
    $query  = DB::table('orders as a')
    ->select(DB::raw("date_format(a.order_date,'%Y-%m') "), DB::raw("SUM(b.quantity *  b.price)"))
    ->join('order__items as b' , 'b.order_id', '=','a.id')
    
    ->groupBy(DB::raw("date_format(a.order_date,'%Y-%m') "))
    ->orderBy(DB::raw("date_format(a.order_date,'%Y-%m') "), 'DESC')->toRawSql();

    dd($query);
});


Route::get('/cau7', function () {
    $query = DB::table('products')
        ->select('products.product_name')
        ->leftJoin('order__items','products.id' , '=','order__items.product_id')
        ->whereNull('order__items.product_id' )->toRawSql();

        dd($query);
});

Route::get('/cau8', function () {
    $subQuery = DB::table('order__items')
        ->select('product_id', DB::raw('SUM(quantity * price) as total'))
        ->groupBy('product_id');

    $query = DB::table('products as p')
        ->joinSub($subQuery, 'oi', function ($join) {
            $join->on('p.id', '=', 'oi.product_id');
        })
        ->select('p.id', 'p.product_name', DB::raw('MAX(oi.total) AS max_revenue'))
        ->groupBy('p.id', 'p.product_name')
        ->orderBy('max_revenue', 'DESC')->toRawSql();
    
    dd($query);
});

Route::get('/cau9', function () {
    
    $subQuery = DB::table('order__items')
        ->select(DB::raw('SUM(quantity * price) as total'))
        ->groupBy('order_id');

    
    $averageOrderValue = DB::table(DB::raw("({$subQuery->toSql()}) as avg_order_value"))
        ->select(DB::raw('AVG(total)'))->value('AVG(total)');

    
    $query = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->join('order__items', 'orders.id', '=', 'order__items.order_id')
        ->select('orders.id', 'users.name', 'orders.order_date', DB::raw('SUM(order__items.quantity * order__items.price) as total_value'))
        ->groupBy('orders.id', 'users.name', 'orders.order_date')
        ->having(DB::raw('SUM(order__items.quantity * order__items.price)'), '>', $averageOrderValue)
        ->get();

    dd($query);
});




