<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'church_id' => $this->faker->numberBetween(1,10),
            'tool_id' => $this->faker->numberBetween(1,2),
            'date' => $this->faker->numberBetween(2021,2022).'-'.$this->faker->numberBetween(1,12).'-'.$this->faker->numberBetween(1,25),
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'url' => 'https://url.com.br',
            'type' => 'hibrid',
        ];
    }
}
