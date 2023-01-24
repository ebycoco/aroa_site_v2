<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'sujet',
        'message',
    ];
    protected $created_at = [
        'created_at' => 'datetime:Y-m-d',
    ];
}
