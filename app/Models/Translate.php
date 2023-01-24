<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JamesDordoy\LaravelVueDatatable\Traits\LaravelVueDatatableTrait;

class Translate extends Model
{
    use HasFactory, LaravelVueDatatableTrait;
    protected $fillable = [
        'lang_key',
        'french',
        'english',
    ];

    protected $dataTableColumns = [
        'id' => [
            'searchable' => false,
        ],
        'lang_key' => [
            'searchable' => true,
        ],
        'english' => [
            'searchable' => true,
        ],
        'french' => [
            'searchable' => true,
        ]
    ];

    protected $dataTableRelationships = [
        //
    ];
}
