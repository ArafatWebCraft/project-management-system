<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function add_member($id)
    {
        $projects = Project::find($id);
        return view('member.add_member', compact('projects'));
    }
    public function store_member(Request $request, $id)
    {
        try {
            $data_insert = Member::create([
                'project_id' => $id,
                'add_member' => $request->name,
                'description' => $request->description,
                'due_date' => $request->due_date,
                'status' => $request->status
            ]);
            return redirect()->route('add.member', $id)->with('message', 'add member Succesfully created');
        } catch (\Exception $e) {
            return redirect()->route('add.member', $id)->with('error', 'add member faild');
        }
    }
}
