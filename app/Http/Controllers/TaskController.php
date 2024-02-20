<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add_task($id){
        $projects = Project::find($id);
        return view('task.task',compact('projects','id'));
    }
    public function store_task(Request $request,$id){
        try{
            $data_insert = Task::create([
                'project_id' => $id,
                'name' => $request->name,
                'description' => $request->description,
                'due_date' => $request->due_date,
                'status' => $request->status
            ]);
            return redirect()->route('add.task', $id)->with('message','Task Succesfully created');
        }
        catch(\Exception $e){
            return redirect()->route('add.task', $id)->with('error','Task faild');
        }
    
    }

}
