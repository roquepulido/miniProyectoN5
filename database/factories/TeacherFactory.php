<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user = User::factory()->create();
        $user->assignRole('teacher');
        return [

            'user_id' => $user->id,
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'address' => fake()->address(),
            'birth_date' => fake()->dateTimeBetween('1990-01-01', '2012-12-31')
                ->format('Y-m-d'),

        ];
    }
}
