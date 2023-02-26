<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(20)->create();

        // $factory->define(App\Post::class, function ($faker) {
        //     return [
        //         'title' => $faker->title,
        //         'content' => $faker->paragraph,
        //         'user_id' => factory(App\User::class),
        //     ];
        // });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
