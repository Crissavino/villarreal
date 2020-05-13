<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'votes',
        'creator_id',
        'clicks',
    ];

    use SoftDeletes;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function creator()
    {
        return $this->belongsTo(Creator::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
