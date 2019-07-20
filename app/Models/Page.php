<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Translatable;

    /**
     * @var array
     */
    public $translatedAttributes = [
        'name',
        'slug',
        'content',
        'title_tag',
        'description_tag'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'active' => 'boolean'
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
