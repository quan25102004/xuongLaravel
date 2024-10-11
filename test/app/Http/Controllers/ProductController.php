<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::latest('id')->paginate(5);
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'nullable|max:255',
            'price'=> 'required|numeric',
            'quantity'=> 'required|integer',
            'is_active'=> ['nullable',Rule::in([0,1])],
            'image'=> 'nullable|image|max:2048',
        ]);
        try {
            if($request->hasFile('image')){
                $data['image'] = Storage::put('img',$request->file('image'));
            }
            Product::query()->create($data);
            return redirect()->route('product.index')->with('succes',true);
        } catch (\Throwable $th) {
            if(!empty($data['image']) && storage::exists($data['image'])){
               Storage::delete($data['image']);
            }
            return back()->with('succes',false)
            ->with('error',$th->getMessage());
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'nullable|max:255',
            'price'=> 'required|numeric',
            'quantity'=> 'required|integer',
            'is_active'=> ['nullable',Rule::in([0,1])],
            'image'=> 'nullable|image|max:2048',
        ]);
        try {
            if($request->hasFile('image')){
                $data['image'] = Storage::put('img',$request->file('image'));
            }
            $old_img= $product->image;
            $product->update($data);
            if($request->hasFile('image') && !empty($old_img) && Storage::exists('old_img')){
            Storage::delete($old_img);
            }
            return back()->with('succes',true);
        } catch (\Throwable $th) {
            if(!empty($data['image']) && storage::exists($data['image'])){
               Storage::delete($data['image']);
            }
            return back()->with('succes',false)
            ->with('error',$th->getMessage());
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
          $product->delete();
          return back()->with('succes',true);
        } catch (\Throwable $th) {
            return back()->with('succes',false)
            ->with('error',$th->getMessage());
        }
    }
    public function forceDestroy(Product $product)
    {
        try {
            $product->forceDelete();
            if(!empty($product->image) && storage::exists($product->image)){
                Storage::delete($product->image);
             }return back()->with('succes',true);
          } catch (\Throwable $th) {
              return back()->with('succes',false)
              ->with('error',$th->getMessage());
              //throw $th;
          }
    }
}
