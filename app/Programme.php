<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Programme extends Model
{

	use Sluggable;

    protected $fillable = [
        'title', 'descriptionGlobale', 'prog_image', 'prix6sesionesPesos', 'prix12sesionesPesos', 'prix6sesionesEuros', 'prix12sesionesEuros', 
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
    
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
