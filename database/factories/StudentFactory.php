<?php

namespace Database\Factories;
use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "control"=>fake()->numerify('########'),
            "name"=>fake()->firstName(),
            "last_name"=>fake()->lastName(),
            "email"=>fake()->email(),
            "semester"=>fake()->numberBetween($min=1, $max=13),
            "program_id"=>Program::all()->random()->id
        ];
    }
}
