<?php

namespace Database\Seeders;

use App\Models\Personnel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnels')->delete();

        $personnel = [
            [
                'nom_personneles' =>  'Tsangamila Toki\'ny Fanantenana',
                'sexe_personneles' =>  1,
                'date_naissance_personneles' => '1996-02-24',
                'lieu_naissance_personneles' => 'Farafangana',
                'adresse_personneles' => 'stpl',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'célibataire',
                'titre' => 'Ingenieur',
                'salaire_base' => 200000
            ],
            [
                'nom_personneles' =>  'Benja',
                'sexe_personneles' =>  1,
                'date_naissance_personneles' => '1975-06-12',
                'lieu_naissance_personneles' => 'Mahanjanga',
                'adresse_personneles' => 'Ambohijatovo',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'Marier',
                'titre' => 'Chef',
                'salaire_base' => 200000
            ],
            [
                'nom_personneles' =>  'Justine',
                'sexe_personneles' =>  0,
                'date_naissance_personneles' => '1996-02-24',
                'lieu_naissance_personneles' => 'Farafangana',
                'adresse_personneles' => 'stpl',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'célibataire',
                'titre' => null,
                'salaire_base' => 200000
            ],
            [
                'nom_personneles' =>  'Bezoo',
                'sexe_personneles' =>  1,
                'date_naissance_personneles' => '1975-06-12',
                'lieu_naissance_personneles' => 'Mahanjanga',
                'adresse_personneles' => 'Ambohijatovo',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'Marier',
                'titre' => 'Superviseur',
                'salaire_base' => 200000
            ],
            [
                'nom_personneles' =>  'julliana',
                'sexe_personneles' =>  1,
                'date_naissance_personneles' => '1975-06-12',
                'lieu_naissance_personneles' => 'Mahanjanga',
                'adresse_personneles' => 'Ambohijatovo',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'Marier',
                'titre' => 'Titulaire',
                'salaire_base' => 200000
            ],
            [
                'nom_personneles' =>  'Razafy',
                'sexe_personneles' =>  1,
                'date_naissance_personneles' => '1975-06-12',
                'lieu_naissance_personneles' => 'Mahanjanga',
                'adresse_personneles' => 'Ambohijatovo',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'Marier',
                'titre' => 'Titulaire',
                'salaire_base' => 200000
            ],
            [
                'nom_personneles' =>  'Bonnie',
                'sexe_personneles' =>  1,
                'date_naissance_personneles' => '1975-06-12',
                'lieu_naissance_personneles' => 'Mahanjanga',
                'adresse_personneles' => 'Ambohijatovo',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'Marier',
                'titre' => 'Principale',
                'salaire_base' => 200000
            ],
            [
                'nom_personneles' =>  'Saholy',
                'sexe_personneles' =>  0,
                'date_naissance_personneles' => '1975-06-12',
                'lieu_naissance_personneles' => 'Mahanjanga',
                'adresse_personneles' => 'Ambohijatovo',
                'telephone_1_personneles' =>  '0346697188',
                'telephone_2_personneles' => '0347927260',
                'situation_matrimoniale_personneles' => 'Celibataire',
                'titre' => 'Comptable',
                'salaire_base' => 200000
            ],
        ];

        Personnel::insert($personnel);
    }
}
