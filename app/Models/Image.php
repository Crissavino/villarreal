<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    protected $fillable = [
        'path',
        'article_id'
    ];

    use SoftDeletes;

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
