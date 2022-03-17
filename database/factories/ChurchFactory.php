<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChurchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Igreja '.$this->faker->randomElement(['Batista', 'Presbiteriana','Metodista', 'Congregacional']).' em '.$this->faker->city(),
            'pastor' => $this->faker->name(),
            'phone' => $this->faker->numberBetween(10000000000,99999999999),
            'email' => strtolower(str_replace(' ','',str_replace("'",'',$this->faker->name()))).'@domain.com',
            'street' => 'Rua '.$this->faker->name(),
            'number' => $this->faker->numberBetween(1,100),
            'complement' => 'Bloco C e Apt.: 1203',
            'neighborhood' => $this->faker->randomElement(['São Fransisco', 'Ingá','Jardim Primavera','Mooca','Osasco','Tijuca']),
            'city' => $this->faker->randomElement(['Niterói', 'Rio de Janeiro','Duque de Caxias','Campos dos Goytacazes','São João da Barra','Angra dos Reis']),
            'state' => $this->faker->randomElement(["AC","AL","AP","AM","BA","CE","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO","DF"]),
            'zipcode' => $this->faker->numberBetween(11111111,99999999),
            'contact' => $this->faker->name(),
            'contact_phone' => $this->faker->numberBetween(10000000000,99999999999),
            'contact_email' => strtolower(str_replace(' ','',$this->faker->name())).'@domain.com',
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ];
    }
}
