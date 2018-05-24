<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model 
{

    protected $table = 'catagories';
    public $timestamps = true;

    public function posts()
    {
        return $this->hasMany('App\User');
    }

}