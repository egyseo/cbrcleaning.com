<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table =  'medias';
    protected $fillable = ['file_name','file_path','userid'];
}
