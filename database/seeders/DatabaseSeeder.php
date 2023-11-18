<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class]);
        $this->command->info('Categories seeder');

        $this->call([TaskSeeder::class]);
        $this->command->info('Tasks seeder');

    }
}
