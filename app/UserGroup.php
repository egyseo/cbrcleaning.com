<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'usergroups';
    protected $fillable = ['parent_id','title','description'];
    
}
