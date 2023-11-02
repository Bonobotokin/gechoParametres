<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_users')->delete();

        $role = [
            [
                'user_id' => 1,
                'role_id' => 1
            ]
        ];
        DB::table('role_users')->insert($role);
    }
}
