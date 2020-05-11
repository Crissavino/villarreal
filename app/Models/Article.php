<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'votes',
        'creator',
    ];

    public function tags()
    {
        return $this->belongsToMany(Article::class);
    }
}
