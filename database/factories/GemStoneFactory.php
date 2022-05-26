<?php

namespace Database\Factories;

use App\Models\GemStone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GemStone>
 */
class GemStoneFactory extends Factory
{

    protected $model = GemStone::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->title,
            'description' => $this->faker->text,
        ];
    }
}
