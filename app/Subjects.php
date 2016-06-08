<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    //

    protected $fillable = [

    	'name',
    	'tuzilac',
    	'tuzeni',
    	'broj_predmeta',
    	'sudija',
    	'sudnica',
    	'user_id'

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
