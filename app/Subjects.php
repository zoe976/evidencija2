<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    //

    protected $fillable = [

    	'name'

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
