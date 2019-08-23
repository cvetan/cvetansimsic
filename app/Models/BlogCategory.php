<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use Translatable;

    /**
     * @var array
     */
    public $translatedAttributes = [
        'title',
        'slug',
        'title_tag',
        'description_tag'
    ];

    /**
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
