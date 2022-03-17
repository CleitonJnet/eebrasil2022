<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnerManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PartnerManagement::factory(200)->create();
    }
}
