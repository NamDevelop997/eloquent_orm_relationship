<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content','user_id'];

    function featureImage()
    {
        return $this->hasOne('App\FeatureImages');
    }

    function user()
    {
        return $this->belongsTo('App\User');
    }
}
