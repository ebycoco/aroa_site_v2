<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pole extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pole',
        'logo_pole',
        'url',
        'user_id',
    ];
}
