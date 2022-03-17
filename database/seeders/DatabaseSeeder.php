<?php

namespace Database\Seeders;

use App\Models\ScheduleDefault;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChurchSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(ScheduleDefaultSeeder::class);
    }
}
