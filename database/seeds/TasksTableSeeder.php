<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create(
            [
                'title' => 'Lavar la ropa',
                'description' => 'tengo que conseguir Ace para lavar',
                'user_id' => 1,
                'category_id' => 1,
                'date_id' => 1,
            ]);

    }
}
