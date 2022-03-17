<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerManagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(6,50),
            'rent' => $this->faker->unique()->numberBetween(2000,5000),
            'ministery' => 1000,
            'medical' => $this->faker->numberBetween(400,1000),
            'admin' => 100,
            'other' => 100,
            'offer' => 100,
            'monthto' => 12,
        ];
    }
}
