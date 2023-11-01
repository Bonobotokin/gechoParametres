<?php

namespace App\Repository;

use App\Interfaces\PersonnelRepositoryInterface;
use App\Models\Personnel;

class PersonnelRepository implements PersonnelRepositoryInterface
{


    public function getAllPersonnels()
    {

        $data = Personnel::with(['user', 'fonction'])
            ->get();

        $allPersonnel = $data->groupBy(function ($datas) {
            return "personnel";
        })->map(function ($groupedPersonel, $key) {
            $personnel = $groupedPersonel->first();
            $fonction = $personnel->fonction;
            $user = $personnel->user;

            return [
                'id' => $personnel->id,
                'nom' => $personnel->nom_personneles,
                'sexe' => $personnel->sexe_personneles,
                'date_naissance' => $personnel->date_naissance_personneles,
                'lieu_naissance' => $personnel->lieu_naissance_personneles,
                'adresse' => $personnel->adresse_personneles,
                'telephone_1' => $personnel->telephone_1_personneles,
                'telephone_2' => $personnel->telephone_1_personneles,
                'situation' => $personnel->situation_matrimoniale_personneles,
                'salaire' => $personnel->salaire_base,
                'fonction' => $fonction->designation_fonction,
                'pseudo' => $user->name,
                'email' => $user->email
            ];
        });



        return $allPersonnel;
    }
}
