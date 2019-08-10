<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['company', 'plane', 'arrival', 'price', 'from', 'to', 'passenger', 'description'];
}

