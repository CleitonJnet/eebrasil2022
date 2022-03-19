<?php

namespace Database\Seeders;

use App\Models\Church;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cleiton dos Santos',
            'gender' => 'M',
            'birth' => '1986-08-28',
            'phone' => '21972765535',
            'email' => 'cleiton.jnet@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('Master_01'),
            'remember_token' => null,
            'church_id' => 1,
            'street' => 'Rua Albino Pereira',
            'number' => '35',
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => 'São Fransisco',
            'city' => 'Niterói',
            'state' => 'RJ',
            'zipcode' => '24365170',
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
        ]);
        DB::table('users')->insert([
            'name' => 'Roberto Foster',
            'gender' => 'M',
            'birth' => '1986-08-28',
            'phone' => null,
            'email' => 'rfoster@eeworks.org',
            'email_verified_at' => null,
            'password' => Hash::make('Master_01'),
            'remember_token' => null,
            'church_id' => 2,
            'street' => null,
            'number' => null,
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => null,
            'city' => null,
            'state' => null,
            'zipcode' => null,
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
        ]);
        DB::table('users')->insert([
            'name' => 'Jailton Barreto Rangel',
            'gender' => 'M',
            'birth' => '1986-08-28',
            'phone' => null,
            'email' => 'jailton@eebrasil.org',
            'email_verified_at' => null,
            'password' => Hash::make('Master_01'),
            'remember_token' => null,
            'church_id' => 3,
            'street' => null,
            'number' => null,
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => null,
            'city' => null,
            'state' => null,
            'zipcode' => null,
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
        ]);
        DB::table('users')->insert([
            'name' => 'Eduardo Domingues',
            'gender' => 'M',
            'birth' => '1986-08-28',
            'phone' => null,
            'email' => 'eduardo@eebrasil.org',
            'email_verified_at' => null,
            'password' => Hash::make('Master_01'),
            'remember_token' => null,
            'church_id' => null,
            'street' => null,
            'number' => null,
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => null,
            'city' => null,
            'state' => null,
            'zipcode' => null,
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
        ]);
        DB::table('users')->insert([
            'name' => 'Mariana Chagas',
            'gender' => 'M',
            'birth' => '1986-08-28',
            'phone' => '21994285501',
            'email' => 'anairam267@hotmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('Master_01'),
            'remember_token' => null,
            'church_id' => 1,
            'street' => 'Rua Albino Pereira',
            'number' => '35',
            'complement' => 'Bloco C Apt 1203',
            'neighborhood' => 'São Fransisco',
            'city' => 'Niterói',
            'state' => 'RJ',
            'zipcode' => '24365170',
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
        ]);
        \App\Models\User::factory(100)->create();

        foreach(Church::get() as $ch){
            DB::table('church_user')->insert([ 'church_id' => $ch->id, 'user_id' => 1, ]);
        }

        DB::table('partner_management')->insert([
            'user_id' => 1,
            'rent' => 5000,
            'ministery' => 1000,
            'medical' => 500,
            'admin' => 100,
            'other' => 100,
            'offer' => 100,
            'monthto' => 12,
        ]);

        DB::table('partner_management')->insert([
            'user_id' => 2,
            'rent' => 5000,
            'ministery' => 1000,
            'medical' => 500,
            'admin' => 100,
            'other' => 100,
            'offer' => 100,
            'monthto' => 12,
        ]);

        DB::table('partner_management')->insert([
            'user_id' => 3,
            'rent' => 5000,
            'ministery' => 1000,
            'medical' => 500,
            'admin' => 100,
            'other' => 100,
            'offer' => 100,
            'monthto' => 12,
        ]);

        DB::table('partner_management')->insert([
            'user_id' => 4,
            'rent' => 5000,
            'ministery' => 1000,
            'medical' => 500,
            'admin' => 100,
            'other' => 100,
            'offer' => 100,
            'monthto' => 12,
        ]);

        DB::table('partner_management')->insert([
            'user_id' => 5,
            'rent' => 5000,
            'ministery' => 1000,
            'medical' => 500,
            'admin' => 100,
            'other' => 100,
            'offer' => 100,
            'monthto' => 12,
        ]);


    }
}
