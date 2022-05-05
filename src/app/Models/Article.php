<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('Models\User');
    }
    use HasFactory;
}
