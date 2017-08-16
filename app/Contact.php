<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'contacts';
    protected $fillable = ['email', 'message', 'phone', 'country', 'ip','city','state','lat', 'lon', 'postal_code'];
}
