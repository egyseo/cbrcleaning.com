<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table ='services';
    protected $fillable = ['name','icon','url_full_content','image_intro','image_full','content_full','content_intro'];
}
