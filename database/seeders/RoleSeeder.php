<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['name' => 'Coach']);
        DB::table('roles')->insert(['name' => 'Conselheiro']);
        DB::table('roles')->insert(['name' => 'Diretor Nacional']);
        DB::table('roles')->insert(['name' => 'Office']);
        DB::table('roles')->insert(['name' => 'FieldWorker']);
        DB::table('roles')->insert(['name' => 'Professor Clínica']);
        DB::table('roles')->insert(['name' => 'Professor WESM']);
        DB::table('roles')->insert(['name' => 'Professor WEPC']);
        DB::table('roles')->insert(['name' => 'Mentor']);
        DB::table('roles')->insert(['name' => 'Facilitador']);
        DB::table('roles')->insert(['name' => 'Participante ESM']);
        DB::table('roles')->insert(['name' => 'Participante TL-EE-P1 e²']);
        DB::table('roles')->insert(['name' => 'Participante TL-EE-P2 m²']);
        DB::table('roles')->insert(['name' => 'Participante TL-EE-P3 c²']);
        DB::table('roles')->insert(['name' => 'Participante TL-EE-P4 r²']);
        DB::table('roles')->insert(['name' => 'Professor TL-EE-KIDS EPC']);
        DB::table('roles')->insert(['name' => 'Participante TL-EE-KIDS EPC']);

        foreach(Role::all() as $role)
        {
            DB::table('role_user')->insert(['role_id' => $role->id,'user_id' => 1]);
        }
        DB::table('role_user')->insert(['role_id' => 3,'user_id' => 2]);
        DB::table('role_user')->insert(['role_id' => 5,'user_id' => 3]);
        DB::table('role_user')->insert(['role_id' => 6,'user_id' => 3]);    }
}
