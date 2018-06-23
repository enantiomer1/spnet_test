<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tape extends Model
{
    protected $table = 'tapes';

    public $timestamps = true;

    protected $fillable = [
        'speaker', 'title', 'description', 'file_name',
        ];
}
