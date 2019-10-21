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

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo('BlogCategory', 'id');
    }

    /**
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany('BlogCategory', 'parent');
    }
}
