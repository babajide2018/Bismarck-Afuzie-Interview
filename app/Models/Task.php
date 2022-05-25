<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'task_name',
        'task_details',
        'priority',
        'user_id'
    ];

    public function checkOffTask(){
        $this->task_status = $this->task_status ? false : true;
        $this->save();
    }
}
