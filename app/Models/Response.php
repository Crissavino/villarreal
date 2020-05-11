<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'comment_id',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function reResponse()
    {
        return $this->belongsTo(ReResponse::class);
    }
}
