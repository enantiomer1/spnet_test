<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->hasMany('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\User');
    }

     public function category()
    {
        return $this->belongsTo('App\User', 'category_id');
    }
}