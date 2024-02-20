<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Task;
use App\Models\Member;

class ShowController extends Controller
{
    public function show_details($id)
    {
        $projects = Project::with('tasks')->findOrFail($id);
        $members = Project::where('id', $id)->with('members')->firstOrFail();
        dd($projects->taks);
        //return view('details.details', compact('projects', 'members'));
    }
}
