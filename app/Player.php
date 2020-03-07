<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'coach'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
