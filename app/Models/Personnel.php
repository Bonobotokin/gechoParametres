<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $table = 'personnels';
    protected $fillable = [
        'fonction_id',
        'user_id',
        'nom_personneles',
        'sexe_personneles',
        'date_naissance_personneles',
        'lieu_naissance_personneles',
        'adresse_personneles',
        'telephone_1_naissance_personneles',
        'telephone_2_naissance_personneles',
        'situation_matrimoniale_personneles',
        'salaire_base'
    ];
    public function parametres()
    {
        return $this->hasOne(Parametres::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fonction()
    {
        return $this->belongsTo(Fonction::class);
    }
}
