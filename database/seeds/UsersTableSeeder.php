<?php

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
        \App\User::create([
            'name' => 'Nguyen Bao Quoc',
            
            'email' => 'baoquoc1134@gmail.com',
            'password' => bcrypt('quoc121212')
        ]);
    }
}
