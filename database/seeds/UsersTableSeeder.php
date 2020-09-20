<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name' => 'Fahmid Chomok',
            'email' => 'fahmidnafichomok@gmail.com',
            'password' => '$2y$10$cjYlxeYnasmfKq78NNX6VupBYmLeMs2z6AToPQZ9ZT1xorE.ITcLu',
            'user_role' => 'admin'
        ]);
    }
}
