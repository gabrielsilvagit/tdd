<?php

namespace App;

use \Str;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function path()
    {
        return '/books/' . $this->id ;
    }
}
