<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $table = 'values';
    protected $fillable = ['name','icon','content'];
}
