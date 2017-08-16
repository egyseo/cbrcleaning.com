<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $fillable = ['name','image','url','description'];
}
