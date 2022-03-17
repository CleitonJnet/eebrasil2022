<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'name' => 'Mariana Chagas',
            'birth' => '1983-08-13',
            'gender' => 'W',
            'phone' => '21972765535',
            'email' => 'email@email',
            'status' => 'Active',
            'period' => 'Monthly',
            'value' => '100',
            'street' => 'Rua Albino Pereira',
            'number' => '35',
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => 'São Fransisco',
            'city' => 'Niteroi',
            'state' => 'RJ',
            'zipcode' => '24210445',
            'user_id'=> 1,
            'since' => '2021-10-10',
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('partners')->insert([
            'name' => 'Primeira Igreja Batista do Ingá',
            'birth' => '1964-11-10',
            'gender' => 'M',
            'phone' => '21000000000',
            'email' => 'secretaria@pibinga.org',
            'status' => 'Active',
            'period' => 'Monthly',
            'value' => '2200',
            'street' => 'Rua Dr. Paulo Alves',
            'number' => '125',
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => 'Ingá',
            'city' => 'Niteroi',
            'state' => 'RJ',
            'zipcode' => '24210445',
            'user_id'=> 1,
            'since' => '2021-10-10',
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('partners')->insert([
            'name' => 'Luiz Vieira',
            'birth' => '1964-11-10',
            'gender' => 'M',
            'phone' => '21000000000',
            'email' => 'secretaria@pibinga.org',
            'status' => 'Inactive',
            'period' => 'Monthly',
            'value' => '100',
            'street' => 'Rua Dr. Paulo Alves',
            'number' => '125',
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => 'Ingá',
            'city' => 'Niteroi',
            'state' => 'RJ',
            'zipcode' => '24210445',
            'user_id'=> 1,
            'since' => '2021-10-10',
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        \App\Models\Partner::factory(300)->create();
    }
}
