<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'email' => 'user2@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'role' => 'admin',
        // ]);
        // User::create([
        //     'name' => 'teacher1',
        //     'email' => 'teacher1@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'role' => 'teacher',
        // ]);
        $user = User::create([
                'email' => 'student1@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'student'
            ]);
        $user->student()->create([
            'name' => "student 1", 
            'address' => "no.58, Kandy", 'phone_number' => "0718888914"
        ]);
    }
}
