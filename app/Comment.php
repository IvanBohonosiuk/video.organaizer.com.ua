<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['user_id', 'user_name', 'slug', 'body', 'videos_id', 'created_at', 'updated_at'];

    public function video()
    {
    	return $this->belongsTo('App\Videos');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
