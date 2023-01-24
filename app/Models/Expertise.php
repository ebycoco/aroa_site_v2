<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expertise extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'expertise',
        'titre_expertise',
        'pole_id',
        'user_id',
    ];
}
