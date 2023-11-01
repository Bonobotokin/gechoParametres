<?php

namespace Database\Seeders;

use App\Models\Personnel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds
     * 
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnels')->delete();

        $personnel = [
            [
                'fonction_id' => 1,
                'user_id' => 1,
                'nom_personneles' =>  'Tsangamila Toki\'ny Fanantenana',
                'sexe_personneles' =>  1,
                'date_naissance_personneles' => '1996-02-24',
                'lieu_naissance_personneles' => 'Farafangana',
                'adresse_personneles' => 'stpl',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'célibataire',
                'salaire_base' => 200000
            ]
        ];

        Personnel::insert($personnel);
    }
}
