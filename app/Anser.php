<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anser extends Model
{
    protected $fillable = ['anser'];


    
    function user_info(){
        return $this->belongsTo('App\UserInfo', 'user_id');
    }

    function question(){
        return $this->belongsTo('App\Question', 'question_id');
       
 
     }

     function student(){
        return $this->belongsTo('App\User', 'user_id');
       
 
     }
}
