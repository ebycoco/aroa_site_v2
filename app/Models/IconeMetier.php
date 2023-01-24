<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconeMetier extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_icone',
        'icone',
        'url',
        'user_id',
    ];
}
