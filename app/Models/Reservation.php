<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

     use HasRestApi;
    
    protected $fillable= [  //propriétés 
        "salle_id", // clef etrangère
        "user_id", // clef étrangère
        "date et heure" // j'hésite à en faire deux champs séparés
    ];
    public function salle() {
        return $this-> belongsTo(Salle::class);  //ici la relation est belongsTo() et pas hasMany() puisque ce sont des clefs étrangères en relation avec deux autres modèles
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

