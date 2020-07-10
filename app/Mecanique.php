<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mecanique extends Model
{
     protected $fillable = [
        'client', 'contact', 'num_devis', 'marque', 'immatriculation', 'annee', 'km', 'num_chassis', 'motorisation', 'date_entree', 'date_sortie', 'num_bon_de_livraison', 'diagnostic', 'num_facture', 'num_pice_de_caisse', 'km', 'designation_piece_demande', 'reference_piece_demande', 'quantite_piece_demande', 'designation_piece_a_fournir', 'reference_piece_a_fournir', 'quantite_piece_a_fournir', 'avis_client',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
