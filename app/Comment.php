<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;

    public function posts()
    {
        return $this->belongsTo('App\User');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }

}