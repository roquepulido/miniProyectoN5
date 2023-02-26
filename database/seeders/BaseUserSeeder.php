<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin',
                'email_verified_at' => now(),
                'password' => ('admin'), // password
            ]
        );
        $user->assignRole('admin');

        $user = User::create(
            [
                'name' => 'teacher',
                'email' => 'teacher@teacher',
                'email_verified_at' => now(),
                'password' => ('teacher'), // password
            ]
        );
        $user->assignRole('teacher');

        $user = User::create(
            [
                'name' => 'student',
                'email' => 'student@student',
                'email_verified_at' => now(),
                'password' => ('student'), // password
            ]
        );
        $user->assignRole('student');
    }
}
