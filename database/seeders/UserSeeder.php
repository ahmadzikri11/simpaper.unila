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
            'name' => 'admin1',
            'email' => 'admin@mail.com',
            'npm' => 0000000001,
            'phone' => 37123239213,
            'password' => bcrypt(1234567890),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'npm' => 0000000002,
            'phone' => 123213123223,
            'password' => bcrypt(1234567890),
            'role' => 'user'
        ]);
        User::create([
            'name' => 'admin2',
            'email' => 'admin2@mail.com',
            'npm' => 0000000003,
            'phone' => 123213123223,
            'password' => bcrypt(1234567890),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'admin3',
            'email' => 'admin3@mail.com',
            'npm' => 0000000004,
            'phone' => 123213123223,
            'password' => bcrypt(1234567890),
            'role' => 'admin'
        ]);
    }
}
