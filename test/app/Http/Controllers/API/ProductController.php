<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->latest('id')->paginate(5);
        return response()->json([
            'message'=>'danh sách người dùng đang ở trang.'.request('page',1),
                    'data'=>$data
                ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            Product::query()->create($data);
            return response()->json($data,201);
        } catch (\Throwable $th) {
            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $th->getMessage()]
            );
            return response()->json([
                'message' => 'Lỗi hệ thống'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
        $data = Product::query()->findOrFail($id);
        return response()->json([
            'message'=>'người dùng id = '.$id,
                    'data'=>$data
                ]);
        } catch (\Throwable $th) {
            if($th instanceof ModelNotFoundException){
                return response()->json([
                    'message'=>'khong thay người dùng id = '.$id,
                        ],Response::HTTP_NOT_FOUND);
            }
            return response()->json([
                'message'=>'khong thay người dùng id = '.$id,
                    ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'nullable|max:255',
            'price'=> 'required',
            'quantity'=> 'required|integer',
            'is_active'=> ['nullable',Rule::in([0,1])],
            'image'=> 'nullable|image|max:2048',
        ]);
        $product=Product::find($id);
        if(!$product){
            return response()->json([
                'message'=>'khong ton tai ID: '.$id
            ],404);
        }
        try {
            $data['is_active'] ??=0;
            if($request->hasFile('image')){
                $data['image'] = Storage::put('img',$request->file('image'));
            }
            $old_img=$product->update($data);
            if($request->hasFile('image') && !empty($old_img) && Storage::exists($old_img)){
                Storage::delete($old_img);
            }
            return response()->json($product,201);
        } catch (\Throwable $th) {
            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $th->getMessage()]
            );
            return response()->json([
                'message' => 'Lỗi hệ thống'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return response()->json([],204);
    }

    public function forceDestroy(string $id)
    {
        $product = Product::find($id);
        if($product){
            $product->forceDelete();
        return response()->json([],204);

        }else{

            return response()->json([
                'message' => 'Lỗi hệ thống'
            ],500);
        }
    }
}
