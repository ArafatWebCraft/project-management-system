<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Member;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function new_project()
    {
        return view('project.project_form');
    }
    public function insert_project(Request $request)
    {
        try {
            $data_insert = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status
            ]);
            return redirect()->route('new.project')->with('message', 'Project Succesfully created');
        } catch (\Exception $e) {
            return redirect()->route('new.project')->with('error', 'Project faild');
        }
    }
    public function project_list()
    {
        $project = Project::all();
        return view('project.project_list', compact('project'));
    }
}
