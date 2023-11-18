<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskCategoryController extends Controller
{
    public function index(Task $task)
    {
        return $task->categories;
    }
}
