<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'major' => fake()->randomElement(['AKL', 'BID', 'TKJ']),
            'class' => fake()->randomElement(['12 AKL 1', '12 BID 1', '12 TKJ 1', '11 AKL 2', '10 BID 2', '11 TKJ 2']),
        ];
    }
}
