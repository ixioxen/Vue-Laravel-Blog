<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Nrc;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Nrc>
 */
class NrcFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->string('township');
            // $table->string('number_code',6);
            // $table->string('nrc_number',6);
            // $table->string('age');
            // $table->string('citizenship',6);
            'township' => fake()->sentence(),
            'number_code' => fake()->numerify('######'),
            'nrc_number' => fake()->numerify('######'),
            'age' => fake()->numberbetween(18,60),
            'citizenship' => fake()-> randomElement(['N','C']),
            'user_id' => User::factory(),
        ];
    }
}
