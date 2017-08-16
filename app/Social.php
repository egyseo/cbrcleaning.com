<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'socialnetworks';
    protected $fillable = ['name','url','icon'];
}
