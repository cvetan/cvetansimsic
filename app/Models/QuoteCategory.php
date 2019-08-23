<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuoteCategory extends Model
{
    /**
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * @return HasMany
     */
    public function quotes(): HasMany
    {
        return $this->hasMany('App\Models\Quote', 'quote_category_id');
    }
}
