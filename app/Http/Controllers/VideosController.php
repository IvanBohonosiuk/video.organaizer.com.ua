<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Videos;
use App\Videos_type;

class VideosController extends Controller
{
    public function index(Videos $videos)
    {   
        $this->data['videos'] = $videos->getActive();
        $this->data['videos'] = $videos->filterCreatedDesc();

    	return view('videos.index', $this->data);
    }

    public function singlevideo($url, Videos $video)
    {
    	$this->data['video'] = $video->getByUrl($url);

        // Отримуємо коментарі для посту за рахунок методу comments() в моделі Video
        $comments = $video->comments;

    	return view('videos.single', $this->data)->withComments($comments);
    }

}
