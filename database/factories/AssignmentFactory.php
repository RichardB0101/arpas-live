<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->randomElement(['Egzamin: ' ,'Sprawdzian: ', 'Kolokwium: ', 'Sprawozdanie: ']) . fake()->sentence(rand(1,5)),
            'author_name' => fake()->firstName() . ' ' .   fake()->lastName(),
            'author_kierunek' => fake()->randomElement(['Informatyka' ,'Ekonomia', 'Europeistyka']),
            'grade' => fake()->numberBetween(1, 10),
            'author_study_year' => fake()->numberBetween(1, 3),
            'author_id' => fake()->numberBetween(1, 100),
        ];
    }
}
