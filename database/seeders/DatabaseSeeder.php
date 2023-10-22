<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FonctionSeeder;
use Database\Seeders\PersonnelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Personnel::factory(1)->create();
        // Magasinier::factory(1)->create();
        // Pharmacien::factory(1)->create();

        $this->call([
            // ServiceMedicaleSeeder::class,
            UserSeeder::class,
            PersonnelSeeder::class,
            RoleSeeder::class,
            FonctionSeeder::class,
        ]);
    }
}
