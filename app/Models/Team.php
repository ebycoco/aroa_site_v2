<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    public function pole()
    {
        return $this->belongsTo('App\Models\Pole', 'pole_id')->select('id', 'nom_pole', 'url');
    }
}
