<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_task', function (Blueprint $table) {
            $table->foreignId('category_id');
            $table->foreignId('task_id');

            $table->primary(['category_id', 'task_id']); // Combinations for category and task FK's must be unique
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_task');
    }
};
