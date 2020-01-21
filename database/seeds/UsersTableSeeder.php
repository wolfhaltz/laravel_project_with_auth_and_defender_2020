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
        User::create([
            'id'    => '1',
            'name'  => 'admin',
            'email' => 'admin@dashboard.com',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'id'    => '2',
            'name'  => 'user',
            'email' => 'user@dashboard.com',
            'password' => Hash::make('123'),
        ]);

    }
}
