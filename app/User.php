<?php

namespace cbrcleaning;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
  
    protected $fillable = ['first_name','last_name','phone','address','city','zipcode','birthday','user_group_id', 'password', 'email', 'registration_ip', 
        'last_visited','registration_date','recieve_email', 'blocked_user', 'require_password_reset'];

    protected $hidden = ['password', 'remember_token'];
}
