<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    // convert the JSON field to key/value pairs
    protected $casts = [
        'content' => 'array'
    ];
}
