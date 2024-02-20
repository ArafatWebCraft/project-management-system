<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_id',
        'name',
        'description',
        'due_date',
        'status',
    ];
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
