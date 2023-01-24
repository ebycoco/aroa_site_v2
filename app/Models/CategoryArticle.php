<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryArticle extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title_category',
        'image_category',
        'description',
        'pole_id',
        'user_id',
    ];

    public function pole()
    {
        return $this->belongsTo('App\Models\Pole', 'pole_id')->select('id', 'nom_pole');
    }
}
