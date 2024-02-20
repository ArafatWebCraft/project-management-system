<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'add_member',
        'description',
        'due_date',
        'status'
    ];
    public function projects()
    {
        return $this->belongsTo(Task::class);
    }
}
