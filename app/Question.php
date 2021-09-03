<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'option_a',
        'option_b',
        'question',
        'option_c',
        'option_d',
        'Ans'
    ];

    function anser(){

        return $this->hasMany('App\Anser', 'question');
    }
}
