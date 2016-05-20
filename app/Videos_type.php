<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos_type extends Model
{
    protected $table = 'videos_types';

    public function video()
    {
    	return $this->hasMany('App\Videos');
    }

}
