<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Task;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function show_details($id)
    {
        $projects = DB::table('projects')->leftjoin()
    }
}
