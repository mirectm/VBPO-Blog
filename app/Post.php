<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //GET THE ROUTE KEY FOR THE MODEL
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
