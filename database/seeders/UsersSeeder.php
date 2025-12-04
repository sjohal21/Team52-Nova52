<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Benjamin',
            'email' => 'example@email.com',
            'password' => 'testing123',
            'phone_number' => '0123456789',
            'address' => null,
            'role' => 'Admin',
        ]);
    }
}
