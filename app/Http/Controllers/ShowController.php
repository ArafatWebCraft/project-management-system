<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Project;
use App\Models\Task;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use PhpParser\ErrorHandler\Collecting;

class ShowController extends Controller
{
    public function show_details($id)
    {
        // $projects = DB::table('projects')
        //     ->rightJoin('tasks', 'projects.id', '=', 'tasks.project_id')
        //     ->rightJoin('members', 'projects.id', '=', 'members.id')
        //     ->select('projects.name as project_name', 'tasks.name as task_name', 'members.*')
        //     ->get();

        // foreach ($projects as $project) {
        //     echo $project->project_name; // Accessing project data
        //     echo $project->task_name; // Accessing task data
        //     echo $project->add_member; // Accessing member data
        // }
        // $project = DB::table('projects')->orderBy('')->chunk(10, function (Collection  $projects) {
        //     foreach ($projects as $project) {
        //         echo '<pre>';
        //         echo $project->name;
        //     }
        // });
        // $project = DB::table('projects')->where('id', '>', '1190')->chunkById(5, function (Collection $projects) {
        //     foreach ($projects as $project) {
        //         DB::table('projects')->where('id', $project->id)->update(['name' => 'Arafat']);
        //     }
        // });
        // dd($project);
    }
}
