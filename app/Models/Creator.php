<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Creator extends Model
{
    protected $fillable = [
        'user_id',
        'userName',
    ];

    use SoftDeletes;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
