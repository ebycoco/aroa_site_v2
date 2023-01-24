<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OffreEmploi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'title_offre',
        'image_offre',
        'content_fr',
        'content_en',
        'meta_title',
        'meta_description',
        'date_post',
        'heure_post',
        'heure_post',
        'pole_id',
        'user_id',
    ];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->latest()->whereNull('parent_id')->take(3);
    }

    public function user()
    {
        return $this->belongsTo(Admin::class);
    }

    public function pole()
    {
        return $this->belongsTo('App\Models\Pole', 'pole_id')->select('id', 'nom_pole', 'url');
    }
}
