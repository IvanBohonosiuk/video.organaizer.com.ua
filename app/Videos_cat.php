<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos_cat extends Model
{
    protected $table = 'videos_cats';

    public function video()
    {
    	return $this->belongsToMany('App\Videos');
    }
}
