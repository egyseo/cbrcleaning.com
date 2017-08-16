<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Prefer extends Model
{
    protected $table = 'prefers';
    protected $fillable = ['title','content'];
}
