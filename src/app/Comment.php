<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = ["reply"];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
