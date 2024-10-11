<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Project::all();
        return response()->json(['data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $data=$request->validate([
            'name'=>['required','max:255',Rule::unique('projects')],
            'description'=>'nullable',
            'start_date'=>'required',

        ]);
        try {
             Project::query()->create($data);
        return response()->json($data,201);
        } catch (\Throwable $th) {
            return response()->json(['msg'=>'loi he thong'],500);

        }
        
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Project::find($id);
        if($data){
            return response()->json(['msg'=>'Du lieu co id:'.$id,
            $data
        ]);
        }else{
            return response()->json(['msg'=>'Khong co du lieu id:'.$id,
        ]);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'name'=>['required','max:255',Rule::unique('projects')->ignore($id)],
            'description'=>'nullable',
            'start_date'=>'required',

        ]);
        $project = Project::find($id);
        if(!$data){
            return response()->json(['msg'=>'Khong co du lieu id:'.$id,
        ]);
        }
        try {
            $project->update($data);
            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json(['msg'=>'loi he thong'],500);
        }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        if($project){
            Project::destroy($id);
            return response()->json([]);
        }
    }
}
