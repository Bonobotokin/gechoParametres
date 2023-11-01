<?php

namespace App\Repository;

use App\Models\User;
use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function getAll()
    {
        return null;
    }

    static function getAllUser()
    {
        $data = User::with('roles')->get()
            ->map(function ($data) {

                return [
                    'id' => $data->id,
                    'nom_user' => $data->name,
                    'email' => $data->email,
                    'role' => $data->designation_role
                ];
            });

        return $data;
    }
}
