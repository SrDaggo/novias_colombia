<?php

use App\TaskDate;
use Illuminate\Database\Seeder;

class TasksDatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskDate::create(
            [
                'name' => 'De 10 a 12 meses',
            ]);
        TaskDate::create(
            [
                'name' => 'De 2 a 3 meses',
            ]);
        TaskDate::create(
            [
                'name' => 'ultima hora',
            ]);
    }
}
