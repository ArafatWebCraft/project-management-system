<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Task;
use App\Models\Project;
use Carbon\Carbon;
use Faker\Generator as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {

        DB::table('tasks')->insert([
            'name' => Str::random(10),
            'project_id' => Project::pluck('id')->random(),
            'description' => Str::random(10),
            'due_date' => $this->$faker->date,
            'status' => Str::random(10)
        ]);
    }
}
