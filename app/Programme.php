<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Programme extends Model
{

	use Sluggable;

    protected $fillable = [
        'title', 'image', 'prix',
    ];

    public function descriptions()
    {
    	return $this->hasMany(Description::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
