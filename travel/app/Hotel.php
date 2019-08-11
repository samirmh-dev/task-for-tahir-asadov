<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['title', 'star', 'city', 'address', 'price', 'description'];
}
