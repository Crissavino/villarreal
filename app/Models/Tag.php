<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    protected $fillable = [
        'title',
        'clicks'
    ];

    use SoftDeletes;

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
