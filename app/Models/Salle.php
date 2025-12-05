<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;   
use Lomkit\Rest\Concerns\HasRestApi;   
use App\Models\Reservation; 
class Space extends Model    //ici la classe qui sert de plan où je prévois les actions avec les méthodes (fonctions à l'intérieur de la classe) et les propriétés(variables de l'objet)
{
    use HasRestApi, Searchable;
    protected $fillable = [   //ici je met protected car je m'assure que le contenu soit accessible uniquement depuis la classe. $fillable est une propriété eloquent pour expliciter quels champs peuvent être remplis
        "nom",
        "activite"    // dans le tableau je n'ai pas mis id ni timestamps qui sont des colonnes sensibles
    ];

    public function reservations() {      //ici je mets la méthode en public pour qu'elle puisse être appelée en dehors de la classe avec un nom clair pour savoir ce qui est ciblé et faciliter le code de relation pour le modèle reservation
        return $this-> hasMany(Reservation::class);  //$this représente l'objet dans sa forme actuelle, hasMany() désigne le rapport "un à plusieurs en relations" 
    }
      public function toSearchableArray()   // AJout d'une méthode Laravel Scout
    {
        return [
            'nom' => $this->nom,
            'activite' => $this->activite,
        ];
    }

}
