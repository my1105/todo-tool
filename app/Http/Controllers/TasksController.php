<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(Task::$rules, Task::$message);
        $result = Task::create($validated);
        return $result->id;
    }
    public function index()
    {
        $tasks = Task::all();
        return view(
            'tasks.index',
            [
                'tasks' => $tasks]
        );
    }
}
