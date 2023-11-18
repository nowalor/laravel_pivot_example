<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define 20 real tasks
        $tasks = [
            ['name' => 'Complete project proposal'],
            ['name' => 'Review and reply to emails'],
            ['name' => 'Attend team meeting'],
            ['name' => 'Prepare presentation slides'],
            ['name' => 'Exercise for 30 minutes'],
            ['name' => 'Read a chapter of a book'],
            ['name' => 'Create to-do list for the week'],
            ['name' => 'Buy groceries'],
            ['name' => 'Update resume'],
            ['name' => 'Learn a new programming language feature'],
            ['name' => 'Plan weekend activities'],
            ['name' => 'Write blog post'],
            ['name' => 'Call a friend or family member'],
            ['name' => 'Attend gym session'],
            ['name' => 'Research new industry trends'],
            ['name' => 'Cook a new recipe'],
            ['name' => 'Practice playing a musical instrument'],
            ['name' => 'Organize workspace'],
            ['name' => 'Watch a documentary'],
            ['name' => 'Take a walk in the park'],
            // Add more tasks as needed
        ];

        // Bulk insert tasks into the database
        Task::insert($tasks);
    }
}
