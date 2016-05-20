<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';

    public function categories()
    {
    	return $this->belongsToMany('App\Videos_cat');
    }

    public function types()
    {
    	return $this->belongsTo('App\Videos_type');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function getActive()
    {
    	return $this->published()
            ->get();
    }

    public function getByUrl($url)
    {
        return $this->published()
            ->url($url)
            ->firstOrFail();
    }

    public function filterNameDesc()
    {
    	return $this->descName()
    		->get();
    }

    public function filterCreatedDesc()
    {
    	return $this->descCreated()
    		->get();
    }

    public function scopeDescCreated($query)
    {
    	$query->orderBy('created_at', 'desc');
    }

    public function scopeDescName($query)
    {
    	$query->orderBy('title', 'desc');
    }

    public function scopeUrl($query, $url)
    {
        $query->where(['url'=>$url]);
    }

    public function scopePublished($query)
    {
    	$query->where(['active'=>1]);
    }
}
