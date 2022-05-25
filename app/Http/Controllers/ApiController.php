<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //

    public function projects()
    {
        $projects = DB::table('projects')->get();
        return response()->json($projects);
    }

    public function todo()
    {
        $tasks = DB::table('tasks')->get();
        return response()->json($tasks);
    }

    public function viewTodo(Task $task){
        return response()->json($task);
    }

    public function deleteTodo(Task $task)
    {
        $task->delete();
        return response()->json('Todo has been deleted successfully', 200);
    }

}
