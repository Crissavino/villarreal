<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReResponse extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'response_id',
    ];

    use SoftDeletes;

    public function response()
    {
        return $this->belongsTo(Response::class);
    }}
