<?php

namespace App\Repository;

use App\Interfaces\FonctionRepositoryInterface;
use App\Models\Fonction;

class FonctionRepository implements FonctionRepositoryInterface
{
    public function getAll()
    {
        $data = Fonction::get()
            ->map(function ($data) {
                return [
                    'id' => $data->id,
                    'designation' => $data->designation_fonction,

                    'designation_fonction' => $data->designation_fonction
                ];
            });

        return $data;

        return $data;
    }

    public static function getListe()
    {

        $data = Fonction::get()
            ->map(function ($data) {
                return [
                    'id' => $data->id,
                    'designation' => $data->designation_fonction
                ];
            });

        return $data;
    }
}
