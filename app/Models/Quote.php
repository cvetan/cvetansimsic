<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
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
     *@return BelongsTo
     */
    public function quoteCategory()
    {
        return $this->belongsTo('App\Models\QuoteCategory');
    }
}
