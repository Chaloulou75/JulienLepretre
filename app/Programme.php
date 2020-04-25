<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Programme extends Model
{

	use Sluggable;

    protected $fillable = ['title', 'descriptionCourte', 'descriptionComplete', 'photoProgramme', 'photoProgUrl', 'image', 'image2', 'imageurl', 'image2url', 'prixPesos', 'prixDollar', 'lienYoutube', 'lienTiendup',
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
