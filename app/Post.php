<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'auteur', 'soustitre1', 'description', 'soustitre2', 'content', 'photoPost', 'photoPostUrl', 'lienYoutube', 'lienInstagram', 'lienFacebook'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);

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
