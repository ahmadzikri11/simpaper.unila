<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'npm' => 8888888888,
            'phone' => 37123239213,
            'password' => bcrypt(1234567890),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'npm' => 9999999999,
            'phone' => 123213123223,
            'password' => bcrypt(1234567890),
            'role' => 'user'
        ]);
    }
}
