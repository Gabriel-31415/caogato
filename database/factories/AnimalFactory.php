<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Breed;
use App\Models\AnimalType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'is_castrated' => $this->faker->boolean(),
            'user_id' => User::factory(),
            'breed_id' => Breed::factory(),
            'animal_type_id' => AnimalType::factory(),
        ];
    }
}
