<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'task',
        'due_date',
];

    public static $rules = [
        'task' => 'required',
        'due_date' => 'nullable|date',
    ];

    public static $message = [
        'task.required' => 'タスクの内容を入力してください',
    ];
}
