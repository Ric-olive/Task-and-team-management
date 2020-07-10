<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = [
        'user_id', 'client', 'contact', 'num_ot', 'date_reception', 'heure_reception', 'marque', 'chassis', 'imm', 'kilometrage', 'manivelle', 'crick', 'cle_a_roue', 'roue_de_secours', 'clignotant_daile', 'clignotant_par_choc', 'calendre', 'parbrise_avant', 'parbrise_arriere', 'antenne', 'dossiers', 'retroviseur_ext_gauche', 'retroviseur_ext_droit', 'retroviseur_interieur', 'phare_avant', 'deux_feux_arriere', 'appareil_musical', 'cassette', 'cd', 'triangle_de_detresse', 'deja_repare_a_desg', 'deja_repare_ailleurs', 'nom_de_garage', 'avis_client', 'avis_technicien',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
