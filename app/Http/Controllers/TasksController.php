<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store(Request $request)
    {
        $task = $request->input('task');
        $result = Task::create([
            'task' => $task
            ]);

        return $result->id;
    }

}
