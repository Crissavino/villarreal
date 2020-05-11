<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReResponse extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'response_id',
    ];

    public function response()
    {
        return $this->belongsTo(Response::class);
    }}
