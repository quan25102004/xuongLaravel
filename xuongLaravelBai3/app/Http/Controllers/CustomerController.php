<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'customers.';

    public function index()
    {
        $data = Customer::latest('id')->paginate(5);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'avatar' => 'nullable|image|max:2048',
            'phone' => [
                'required',
                'string',
                'max:20',
                Rule::unique('customers')
            ],
            'email' => 'required|email|max:100',
            'is_active' => ['nullable', Rule::in([0, 1])],
        ]);
        // Logic
        try {
            // Hoặc isset($data['avatar'])
            if ($request->hasFile('avatar')) {
                $data['avatar'] = Storage::put('customers', $request->file('avatar'));
            }
            Customer::query()->create($data);
            return redirect()
                ->route('customers.index')
                ->with('success', true);
        } catch (\Throwable $th) {
            if (!empty($data['avatar']) && Storage::exists($data['avatar'])) {
                Storage::delete($data['avatar']);
            }
            return back()
                ->with('success', false)
                ->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        dd($customer);
        return view(self::PATH_VIEW . __FUNCTION__, compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'avatar' => 'nullable|image|max:255',
            'phone' => [
                'required',
                'string',
                'max:20',
                Rule::unique('customers')->ignore($customer->id)
            ],
            'email' => 'required|email|max:100',
            'is_active' => ['nullable', Rule::in([0, 1])],
        ]);
        // Logic
        try {

            // $data['is_active'] = isset($data['is_active']) ? $data['is_active'] : 0;
            //  $data['is_active'] = ($data['is_active']) ??  0;
            $data['is_active'] ??= 0;

            // Hoặc isset($data['avatar'])
            if ($request->hasFile('avatar')) {
                $data['avatar'] = Storage::put('customers', $request->file('avatar'));
            }
            
            $currentAvatar = $customer->avatar; // Lưu lại giá trị hiện tại của bản ghi 

            $customer->update($data);
            // Sau khi update nếu lỗi, xóa ảnh
            if (
                $request->hasFile('avatar') // có upload
                && !empty($currentAvatar)  // có giá trị 
                && Storage::exists($data['avatar']) // file có tồn tại 
            ) {
                Storage::delete($currentAvatar); //xóa
            }
            return back()->with('success', true);


        } catch (\Throwable $th) {
            if (!empty($data['avatar']) && Storage::exists($data['avatar'])) {
                Storage::delete($data['avatar']);
            }
            return back()
                ->with('success', false)
                ->with('erro', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();
            return back()->with('success', true);

        } catch (\Throwable $th) {
            return back()
                ->with('success', true)
                ->with('error', $th->getMessage());
        }
    }

    public function forceDestroy(Customer $customer)
    {
        try {
            $customer->forceDelete();
            if (!empty($customer->avatar) && Storage::exists($customer->avatar)) {
                Storage::delete($customer->avatar);
            }
            return back()->with('success', true);

        } catch (\Throwable $th) {
            return back()
                ->with('success', false)
                ->with('error', $th->getMessage());
        }
    }
}
