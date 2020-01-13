<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Robert',
            'lastname' => 'Principe',
            'email' => 'robert@make.oi',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);
    }
}
