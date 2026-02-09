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
        session()->flash('success', 'タスクを追加しました');
        return redirect()->route('tasks.index');
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
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view(
            'tasks.edit',
            [
            'task' => $task
            ]
        );
    }
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $validated = $request->validate(Task::$rules, Task::$message);
        $task->update($validated);
        return redirect()->route('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        session()->flash('success', 'タスクを削除しました');
        return redirect()->route('tasks.index');
    }

    public function done($id)
    {
        $task = Task::findOrFail($id);
        $task->done = !$task->done;
        $task->save();
        session()->flash('success', 'タスクをの状態を変更しました');
        return redirect()->route('tasks.index');
    }

}
