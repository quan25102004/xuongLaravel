<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Task::all();
        return response()->json($data, 201);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,string $id)
    {
        try {
             $data=$request->validate([
            'name'=>'required|max:255',
        ]);
        $data['status']='Chưa thực hiện';
        $project = Project::find($id);

        $task = $project->tasks()->create($data);
    
        return response()->json($task, 201);
        } catch (\Throwable $th) {
            return response()->json(['msg'=>'lỗi hệ thống'], 500);
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Task $task)
    {
        $project = Project::find($id);

        if ($task->project_id !== $project->id) {
            return response()->json(['error' => 'Nhiệm vụ '.$task->name .' không thuộc dự án '.$id], 404);
        }
        return response()->json([$task,$project], 201);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id,)
    {
        try {
              $task = Task::find($id);

        $data=$request->validate([
            'name'=>'required|max:255',
            'status'=>'nullable'
        ]);
        $data['status'] ??='Chưa thực hiện';

        $task->update($data);
    
        return response()->json($task, 201);
        } catch (\Throwable $th) {
            return response()->json(['msg'=>'lỗi hệ thống'], 500);
        }
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        if($task){
            Task::destroy($id);
            return response()->json([]);
        }
    }
}
