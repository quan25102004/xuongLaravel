<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Expenses;
use App\Models\Product;
use App\Models\Sale;
use App\Models\taxec;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::insert([
            ['id'=>1,'name'=>'Bàn gỗ','price'=>200000,'created_at'=>NOW(),'updated_at'=>NOW()],
            ['id'=>2,'name'=>'Ghế xoay','price'=>150000,'created_at'=>NOW(),'updated_at'=>NOW()],
            ['id'=>3,'name'=>'Tủ quần áo','price'=>500000,'created_at'=>NOW(),'updated_at'=>NOW()],
            ['id'=>4,'name'=>'Giường ngủ','price'=>800000,'created_at'=>NOW(),'updated_at'=>NOW()],

        ]);

        Sale::insert([
            ['id'=>1,'product_id'=>1,'quantity'=>3,'price'=>200000,'tax'=>600000,'total'=>6600000,'sale_date'=>'2024-09-14','created_at'=>NOW(),'updated_at'=>NOW()],
            ['id'=>2,'product_id'=>2,'quantity'=>2,'price'=>150000,'tax'=>300000,'total'=>3300000,'sale_date'=>'2024-09-16','created_at'=>NOW(),'updated_at'=>NOW()],
            ['id'=>3,'product_id'=>3,'quantity'=>1,'price'=>500000,'tax'=>500000,'total'=>5500000,'sale_date'=>'2024-09-18','created_at'=>NOW(),'updated_at'=>NOW()],
            ['id'=>4,'product_id'=>4,'quantity'=>2,'price'=>800000,'tax'=>1600000,'total'=>17600000,'sale_date'=>'2024-09-24','created_at'=>NOW(),'updated_at'=>NOW()],
        ]);

        Expenses::insert([
           ['id'=>1,'description'=>'Nhập hàng tháng 9','amount'=>500000,'expense_date'=>'2024-09-05','created_at'=>NOW(),'updated_at'=>NOW()],
           ['id'=>2,'description'=>'chi phí vận chuyển','amount'=>1000000,'expense_date'=>'2024-09-10','created_at'=>NOW(),'updated_at'=>NOW()],
           ['id'=>3,'description'=>'Bảo hàng sản phẩm','amount'=>800000,'expense_date'=>'2024-09-12','created_at'=>NOW(),'updated_at'=>NOW()],
           ['id'=>4,'description'=>'lương nhân viên tháng 9','amount'=>1200000,'expense_date'=>'2024-09-30','created_at'=>NOW(),'updated_at'=>NOW()],
        ]);

        DB::table('financial_reposts')->insert([
            ['id'=>1,'month'=>9,'year'=>2024,'total_sales'=>32000000,'total_expenses'=>18800000,'profit_before_tax'=>13200000,'tax_amount'=>3200000,'profit_after_tax'=>10000000,'created_at'=>NOW(),'updated_at'=>NOW()],
        
         ]);

        taxec::insert([
            ['id'=>1,'tax_name'=>'VAT','rate'=>10,'created_at'=>NOW(),'updated_at'=>NOW()],
         ]);
    }
}
