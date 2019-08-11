<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Hotel extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $fillable = ['title', 'star', 'city', 'address', 'price', 'description'];
}
