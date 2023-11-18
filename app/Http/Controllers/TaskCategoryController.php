<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;

class TaskCategoryController extends Controller
{
    public function index(Task $task): JsonResponse
    {
        $categories = $task->categories;

        return response()->json([
            'data' => $categories,
        ]);
    }
}
