<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule_defaults')->insert([
            'unity_id' => 23,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '08:30',
            'end' => '08:45',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 24,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '08:45',
            'end' => '09:30',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 25,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '09:30',
            'end' => '09:50',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 26,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '18:00',
            'end' => '18:30',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 27,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '18:00',
            'end' => '18:30',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 28,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '18:00',
            'end' => '18:30',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 29,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '18:00',
            'end' => '18:30',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 30,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '18:00',
            'end' => '18:30',
        ]);
        DB::table('schedule_defaults')->insert([
            'unity_id' => 31,
            'tool_id' => 2,
            'date' => '2022-03-19',
            'start' => '18:00',
            'end' => '18:30',
        ]);
}
}
