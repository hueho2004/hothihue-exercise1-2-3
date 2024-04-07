<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $student = Student::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' =>$this->faker->numberBetween(18,21),
            'location' =>$this->faker->streetAddress,
        ];
    }
}