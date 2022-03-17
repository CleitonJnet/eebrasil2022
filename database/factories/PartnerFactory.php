<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
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
            'birth' => $this->faker->numberBetween(1950,2000).'-'.$this->faker->numberBetween(1,12).'-'.$this->faker->numberBetween(1,28),
            'gender' => 'M',
            'since' => $this->faker->numberBetween(1950,2000).'-'.$this->faker->numberBetween(1,12).'-'.$this->faker->numberBetween(1,28),
            'phone' => '21972765535',
            'email' => strtolower(str_replace(' ','',str_replace("'",'',$this->faker->name()))).'@domain.com',
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'period' => $this->faker->randomElement(['Yearly', 'Monthly', 'Unique']),
            'value' => '100',
            'street' => 'Rua '.$this->faker->name(),
            'number' => $this->faker->numberBetween(1,1000),
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => $this->faker->randomElement(['São Fransisco', 'Ingá','Jardim Primavera','Mooca','Osasco','Tijuca']),
            'city' => $this->faker->randomElement(['Niterói', 'Rio de Janeiro','Duque de Caxias','Campos dos Goytacazes','São João da Barra','Angra dos Reis']),
            'state' => $this->faker->randomElement(["AC","AL","AP","AM","BA","CE","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO","DF"]),
            'zipcode' => $this->faker->numberBetween(11111111,99999999),
            'user_id'=> 2, /* $this->faker->numberBetween(2,55) */
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ];
    }
}
