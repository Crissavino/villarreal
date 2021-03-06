<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Response extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'comment_id',
    ];

    use SoftDeletes;

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function reResponse()
    {
        return $this->belongsTo(ReResponse::class);
    }
}
