<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $table = 'tags';
    public $timestamps = true;

    protected $fillable = [
        'name', 'description'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

}