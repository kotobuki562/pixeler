<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
