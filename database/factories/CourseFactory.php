<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Course::class;
    public function definition(): array
    {
        
        return [
            'name' => $this->faker->sentence,
            'duration' => $this->faker->numberBetween(1, 100),
            'field' => $this->faker->word,
            'user_id' => User::factory(),
        ];
    }
    
}


