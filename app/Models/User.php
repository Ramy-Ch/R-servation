<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Lomkit\Rest\Concerns\HasRestApi;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Reservation; 
class User extends Authenticatable
{
    use HasRestApi;
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function reservations() {  //ici méthode
        return $this->hasMany(Reservation::class); //relation hasMany reliée au modèle Reersevation qui va utiliser le user_id en clef étrangère
    }

public function toSearchableArray() {
        return [
            'name' => $this->name,
        ];
    }

}
