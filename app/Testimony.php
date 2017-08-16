<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimonials';
    protected $fillable = ['content','stars','name','position'];
}
