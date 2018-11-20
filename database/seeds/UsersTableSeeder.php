<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hector',
            'email' => 'hector@dev.com',
            'password' => bcrypt('123456'),
            'marrige_date' => '2018-11-02',
            'gender' => 'male',
            'departamento_id' => '11',
            'municipio_id' => '107',
        ]);
    }
}
