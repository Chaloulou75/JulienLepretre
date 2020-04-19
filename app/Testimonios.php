<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonios extends Model
{
    protected $fillable = [
        'name', 'avatar', 'avatarurl', 'msg',
    ];
}
