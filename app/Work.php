<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table ='works';
    protected $fillable = ['name','urlimagemini','urlimagefull','urlcontent','introcontent','content'];
}
