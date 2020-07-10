<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Injecteur extends Model
{
     protected $fillable = [
        'user_id', 'client', 'contact', 'num_ot', 'quantite', 'type', 'serie', 'type2', 'serie2', 'type3', 'serie3', 'type4', 'serie4', 'type5', 'serie5', 'type6', 'serie6', 'type7', 'serie7', 'type8', 'serie8', 'type9', 'serie9', 'type10', 'serie10', 'date_entree', 'reference', 'reference2', 'reference3', 'reference4', 'reference5', 'reference6', 'reference7', 'reference8', 'reference9', 'reference10', 'cassure', 'deja_repare', 'deja_plombe', 'deja_controle', 'avis_client', 'avis_technicien', 'debut_tache', 'fin_tache', 'taskstatut',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
