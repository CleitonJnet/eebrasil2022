<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('Master_01'), // password
            'remember_token' => Str::random(10),
            'gender' => 'M',
            'birth' => $this->faker->numberBetween(1940,2000).'-'.$this->faker->numberBetween(1,12).'-'.$this->faker->numberBetween(1,28),
            'phone' => $this->faker->numberBetween(10000000000,99999999999),
            'street' => 'Rua '.$this->faker->name(),
            'number' => $this->faker->numberBetween(1,100),
            'complement' => 'mais informações',
            'neighborhood' => $this->faker->randomElement(['São Fransisco', 'Ingá','Jardim Primavera','Mooca','Osasco','Tijuca']),
            'city' => $this->faker->randomElement(['Niterói', 'Rio de Janeiro','Duque de Caxias','Campos dos Goytacazes','São João da Barra','Angra dos Reis']),
            'state' => $this->faker->randomElement(['SP', 'RJ','MG','AM','RS','PE']),
            'zipcode' => $this->faker->numberBetween(11111111,99999999),
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'church_id' => $this->faker->numberBetween(1,100)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
