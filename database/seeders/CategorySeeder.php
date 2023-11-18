<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define 20 task categories as an array of arrays
        $categories = [
            ['name' => 'Work'],
            ['name' => 'Personal'],
            ['name' => 'Health'],
            ['name' => 'Education'],
            ['name' => 'Entertainment'],
            ['name' => 'Fitness'],
            ['name' => 'Finance'],
            ['name' => 'Travel'],
            ['name' => 'Shopping'],
            ['name' => 'Home'],
            ['name' => 'Social'],
            ['name' => 'Hobbies'],
            ['name' => 'Family'],
            ['name' => 'Technology'],
            ['name' => 'Food'],
            ['name' => 'Reading'],
            ['name' => 'Art'],
            ['name' => 'Music'],
            ['name' => 'Sports'],
            ['name' => 'Outdoor Activities'],
            // Add more categories as needed
        ];

        // Bulk insert categories into the database
        Category::insert($categories);
    }
}
