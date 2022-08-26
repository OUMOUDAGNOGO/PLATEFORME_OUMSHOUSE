<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class boutiques extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_complet',
        'nom_boutique',
        'adresse_boutique',
        'telephone_boutique',
        'email',
        'password',
        'userId',
        'type_boutiqueId',
    ];
}
