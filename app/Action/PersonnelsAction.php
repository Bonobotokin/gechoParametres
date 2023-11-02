<?php

namespace App\Action;


use Carbon\Carbon;
use App\Models\User;
use App\Models\Personnel;
use App\Models\RoleUsers;
use Illuminate\Support\Facades\DB;

class PersonnelsAction

{
    public function saveCompte($request)
    {
        try {
            $data = DB::transaction(function () use ($request) {
                $username = $request->users['name'];
                $userEmail = $username . '@salfa.com';

                $users = User::Create([
                    "name" => $request->users["name"],
                    "email" => $userEmail,
                    "password" => bcrypt($request->users["password"]),
                ]);

                $roleUsers = RoleUsers::Create([
                    'user_id' => $users->id,
                    'role_id' => (int) $request->rolePersonnels['role_id']
                ]);

                if (!is_null($request->personnels["nom_personneles"])) {

                    $personnels = Personnel::Create([
                        'fonction_id' => $request->rolePersonnels['fonction_id'],
                        'user_id' => $users->id,
                        "nom_personneles" => $request->personnels["nom_personneles"],
                        "sexe_personneles" => $request->personnels["sexe_personneles"],
                        "date_naissance_personneles" => $request->personnels["date_naissance_personneles"],
                        "lieu_naissance_personneles" => $request->personnels["lieu_naissance_personneles"],
                        "adresse_personneles" => $request->personnels["adresse_personneles"],
                        "telephone_1_personneles" => is_null($request->personnels["telephone_1_personneles"]) ? null : $request->personnels["telephone_1_personneles"],
                        "telephone_2_personneles" => is_null($request->personnels["telephone_2_personneles"]) ? null : $request->personnels["telephone_2_personneles"],
                        "situation_matrimoniale_personneles" => $request->personnels["situation_matrimoniale_personneles"],
                        "salaire_base" => $request->personnels['salaire']
                    ]);

                    $id_personnels = $personnels->id;
                    return [

                        "data"    => $id_personnels,
                        "message" => "l'enregistrement de $personnels->nom_personneles a été bien enregistré",
                    ];
                }
                return [

                    "data"    => $users->id,
                    "message" => "le comptes de $users->name a été bien enregistré",
                ];
            });

            return $data;
        } catch (\Exception $th) {

            return $th;
        }
    }


    private function insertPersonnelsUser(array $personnels)
    {
        if ($personnels["personnels_id"] != NULL) {
            return $personnels["personnels_id"];
        }
    }
}
