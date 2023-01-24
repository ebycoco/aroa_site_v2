<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class Presentation extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;
    
    protected $fillable = [
        'presentation',
        'image',
        'pole_id',
        'user_id',
    ];

    public function pole()
    {
        return $this->belongsTo('App\Models\Pole', 'pole_id')->select('id', 'nom_pole');
    }
}
