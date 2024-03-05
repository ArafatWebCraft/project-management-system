<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Project::class;
    public function definition(): array
    {
        return [
            // 'name' => $this->faker->name,
            // 'description' => $this->faker->sentence,
            // 'start_date' => $this->faker->date,
            // 'end_date' => $this->faker->date,
            // 'status' => $this->faker->word,
        ];
    }
}
