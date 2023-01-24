<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageAccueil extends Model
{
    use HasFactory;

    protected $fillable = [
        'video',
        'path',
        'nom_entreprise',
        'slogant',
        'message'
    ];
}
