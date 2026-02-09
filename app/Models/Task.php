<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'task',
        'due_date',
        'done',
];

    public static $rules = [
        'task' => 'required',
        'due_date' => 'nullable|date',
        'done' => 'boolean',
    ];

    public static $message = [
        'task.required' => 'タスクの内容を入力してください',
    ];
}
