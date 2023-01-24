<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'description_fr', 'pole_id'
    ];

    public function setCategoryAttribute($value)
    {
        $this->attributes['pole_id'] = json_encode($value);
    }

    public function getCatgoryAttribute($value)
    {
        return json_decode($value);
    }
}
