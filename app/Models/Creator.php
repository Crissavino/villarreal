<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    protected $fillable = [
        'user_id',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
