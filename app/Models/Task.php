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
}
