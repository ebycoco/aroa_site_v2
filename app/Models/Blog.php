<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title_article',
        'image_article',
        'article_fr',
        'article_en',
        'category_id',
        'pole_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\CategoryArticles','id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->latest()->whereNull('parent_id')->take(3);
    }
     
}
