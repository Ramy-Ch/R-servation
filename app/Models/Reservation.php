<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Lomkit\Rest\Concerns\HasRestApi;   
use Laravel\Scout\Searchable;          

use App\Models\Salle;
use App\Models\User;    

class Reservation extends Model
{

     use HasRestApi, Searchable;
    
    protected $fillable= [  //propriétés 
        "date_heure" // j'hésite à en faire deux champs séparés
    ];
    public function salle() {
        return $this-> belongsTo(Salle::class);  //ici la relation est belongsTo() et pas hasMany() puisque ce sont des clefs étrangères en relation avec deux autres modèles
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function toSearchableArray() {
        return [
            'salle_id' => $this->salle_id,
            'debut' => $this->debut,
            'fin' => $this->fin,
        ];
    }
}

