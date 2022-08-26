<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\boutiques;

class type_boutique extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'abreviation',
       
    ];
}
