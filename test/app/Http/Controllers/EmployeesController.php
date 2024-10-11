<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Employees::query()->latest('id')->paginate('5');
        return view('employees.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $data = $request->validate([
            'firts_name'       =>'required|max:100' ,
            'last_name'        =>'required|max:100' ,
            'email'            =>['required','email',Rule::unique('employees', 'email')] ,
            'date_of_birth'    =>'required|date' ,
            'hire_date'        =>'required|date' ,
            'salary'           =>'required|numeric',
            'is_active'        =>['nullable',Rule::in(0,1)],
            'deparment_id'     =>'required|integer' ,
            'manager_id'       =>'required|integer' ,
            'address'          =>'required' ,
            'profile_piture'   =>'nullable|image|max:2048' 
        ]);
        try {
            if($request->hasFile('profile_piture')){
                $profilePiture= $request->file('profile_piture')->getRealPath();
                $data['profile_piture']= base64_encode(file_get_contents($profilePiture));
            }
            Employees::query()->create($data);
            return redirect()->route('employees.index')->with('succes',true);
        } catch (\Throwable $th) {
            return back()->with('succes',false)->with('error',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employees $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employees $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employees $employee)
    {
        $data = $request->validate([
            'firts_name'       =>'required|max:100' ,
            'last_name'        =>'required|max:100' ,
            'email'            =>['required','email',Rule::unique('employees', 'email')->ignore($employee->id)] ,
            'date_of_birth'    =>'required|date' ,
            'hire_date'        =>'required|date' ,
            'salary'           =>'required|numeric',
            'is_active'        =>['nullable',Rule::in(0,1)],
            'deparment_id'     =>'required|integer' ,
            'manager_id'       =>'required|integer' ,
            'address'          =>'required' ,
            'profile_piture'   =>'nullable|image|max:2048' 
        ]);
        try {
            if($request->hasFile('profile_piture')){
                $profilePiture= $request->file('profile_piture')->getRealPath();
                $data['profile_piture']= base64_encode(file_get_contents($profilePiture));
            }else{
                $data['profile_piture']=$employee->profile_piture;
            }
            $employee->update($data);
            return redirect()->route('employees.index')->with('succes',true);
        } catch (\Throwable $th) {
            return back()->with('succes',false)->with('error',$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employees $employee)
    {
        try {
           
            $employee->delete();
            return back()->with('succes',true);
        } catch (\Throwable $th) {
            return back()->with('succes',false)->with('error',$th->getMessage());
        }
    }

    public function forceDestroy(Employees $employee)
    {
        try {
            $employee->forceDelete();
            return back()->with('succes',true);
        } catch (\Throwable $th) {
            return back()->with('succes',false)->with('error',$th->getMessage());
        }
    }
}
