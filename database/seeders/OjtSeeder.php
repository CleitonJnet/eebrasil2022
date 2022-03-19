<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OjtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Training::where('tool_id',1)->get() as $tr){
            for ($i=0; $i < 12; $i++) {
                DB::table('ojts')->insert([
                    'training_id' => $tr->id,
                    'date' => date('Y-m',strtotime($tr->date)).'-'.rand(date('d',strtotime($tr->date)),( date('d',strtotime($tr->date)) + 2)),
                    'time' => '10:00',
                    'mentor_id' => rand(1,50),
                    'host' => 'Pietro Senna',
                    'phone' => '21999998888',
                    'email' => 'pietro.s@domain.com',
                    'street' => 'Rua Dr. Paulo Alves',
                    'number' => '125',
                    'complement' => 'BLoco C Apt 1203',
                    'neighborhood' => 'São Fransisco',
                    'city' => 'Niteroi',
                    'state' => 'RJ',
                    'zipcode' => '24210445',
                    'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
                ]);
                }
        }
    }
}
