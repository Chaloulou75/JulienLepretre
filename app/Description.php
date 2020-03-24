<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $fillable = [
        'phrase',
    ];

    public function programme()
    {
    	return $this->belongsTo(Programme::class);
    }
}
