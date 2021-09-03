<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    function anser(){
        return $this->hasMany('App\Anser', 'user_id');
    }
}
