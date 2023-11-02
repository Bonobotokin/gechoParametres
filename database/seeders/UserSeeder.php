<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'BonoboTokin',
                'email' => 'bonobotokin@admin.com',
                'password' => bcrypt('23@tokin.DEV')
            ]
        ];
        User::insert($users);
    }
}
