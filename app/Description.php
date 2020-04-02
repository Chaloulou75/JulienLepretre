<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $fillable = [
        'programme_id','phrase',
    ];

    public function programmes()
    {
    	return $this->belongsTo(Programme::class);
    }
}
