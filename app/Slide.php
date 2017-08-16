<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';
    protected $fillable = ['backgroundimage','iconimage','text_h1','text_h2','iconimage_position','iconimage_col_size','read_more_link','text_col_size'];
}
