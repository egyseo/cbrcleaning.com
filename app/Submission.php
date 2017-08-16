<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submissions';
    protected $fillable = ['email','message','phone','country','ip','city','state','lat','lon','postal_code'];
}
