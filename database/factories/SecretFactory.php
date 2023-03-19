<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SecretFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Create 4 secrets for each user
            'user_id' => $this->faker->numberBetween(1,4),
            'secret' => $this->faker->text()
        ];
    }
}
