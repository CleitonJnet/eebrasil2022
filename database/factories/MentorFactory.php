<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MentorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->numberBetween(10000000000,99999999999),
            'email' => strtolower(str_replace(' ','',str_replace("'",'',$this->faker->name()))).'@domain.com',
        ];
    }
}
