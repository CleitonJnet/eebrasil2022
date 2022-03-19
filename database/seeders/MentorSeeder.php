<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Mentor::factory(50)->create();
    }
}
