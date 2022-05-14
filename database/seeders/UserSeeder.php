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
            'name' => 'Anwar Sahid',
            'email' => 'anwar@gmail.com',
            'npm' => 1815061003,
            'password' => bcrypt(1234567890),
            'role' => 'admin'
        ]);
    }
}
