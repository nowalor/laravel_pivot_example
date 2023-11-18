<?php

namespace Tests\Feature;

use App\Models\Task;
use Tests\TestCase;

class TaskCategoryTest extends TestCase
{
    public function testTaskCategoryIndexReturnsCorrectCategories(): void
    {
        $task = Task::factory()->create();

        $task->categories()->create(['name' => 'Example category 1']);
        $task->categories()->create(['name' => 'Example category 2']);
        $task->categories()->create(['name' => 'Example category 3']);

        $response = $this->getJson("api/tasks/$task->id/categories");

        $response->assertStatus(200);

        $response->assertJson(['data' => [
            ['name' => 'Example category 1'],
            ['name' => 'Example category 2'],
            ['name' => 'Example category 3'],
        ]]);
    }
}
