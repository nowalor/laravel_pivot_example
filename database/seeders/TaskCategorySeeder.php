<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all tasks and categories
        $tasks = Task::all();
        $categories = Category::all();

        // Loop through tasks and attach categories
        $tasks->each(function ($task) use ($categories) {
            // Shuffle the categories to get a random order
            $shuffledCategories = $categories->shuffle();

            // Determine the number of categories to attach (e.g., 1 to 3)
            $numCategories = rand(1, min($shuffledCategories->count(), 3));

            // Take a random subset of categories
            $randomCategories = $shuffledCategories->random($numCategories);

            // Attach the categories to the task
            $task->categories()->syncWithoutDetaching($randomCategories->pluck('id')->toArray());
        });
    }
}
