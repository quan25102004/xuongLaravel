<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
    {
        $data= Category::query()->latest('id')->paginate(5);
        return view('admin.danhmuc',compact('data'));
    }
}
