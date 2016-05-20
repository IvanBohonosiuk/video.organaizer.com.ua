@extends('layouts.app')

@section('keywords'){{ $video->meta_k }} @stop

@section('description'){!! $video->meta_d !!} @stop

@section('title'){{ $video->title }} @stop

@section('content')

	<div class="page-header">
        <div class="row">
        	<div class="span12">
        		<h1>{{ $video->title }}</h1>
        	</div>
        </div>
    </div>
    <div class="work">
    <div class="row">
    	<div class="col-md-4">
    		<img src="/uploads/videos/full/{{ $video->img }}" width="100%">
    	</div>
      <div class="col-md-8 single_video">
        <h5>Тип</h5>
        <p>
            {{ $video->types['title'] }}
        </p>
        <h5>Жанр</h5>
        <p> 
        @foreach ($video->categories as $category)
            {{$category->title}}
        @endforeach
         </p>
        <h5> Год выхода</h5>
        <p>{{ $video->yers }}</p>
        <h5> Описание</h5>
        <p> {!! $video->description !!} </p>
        <div class="film_code">
        	<iframe width="100%" height="350px"  src="{!! $video->film_code !!}" frameborder="0" allowfullscreen="true"></iframe>
        </div>
        </div>
      
    </div>
    <div class="row">
    	<div class="col-md-12">
            <div>
                <h2>Оставить коментар</h2>
            </div>
            <div>
                <!-- Put this script tag to the <head> of your page -->
                <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

                <script type="text/javascript">
                  VK.init({apiId: 5471399, onlyWidgets: true});
                </script>

                <!-- Put this div tag to the place, where the Comments block will be -->
                <div id="vk_comments"></div>
                <script type="text/javascript">
                VK.Widgets.Comments("vk_comments", {limit: 10, width: "1140", attach: "*"});
                </script>
            </div>
            <!-- @if(Auth::guest())
                <p>Войдите, чтобы оставить коментар</p>
            @else
            <div class="panel-body">
                @if(Session::has('message'))
                    <p>{{Session::get('message')}}</p>
                @endif
                <form method="post" action="/comment/add">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="videos_id" value="{{ $video->id }}">
                    <input type="hidden" name="slug" value="{{ $video->url }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                    <div class="form-group">
                        <textarea required="required" placeholder="Введите комментар сдесь" name="body" class="form-control"></textarea>
                    </div>
                    <input type="submit" name='post_comment' class="btn btn-success" value = "Отправить"/>
                </form>
            </div>
            @endif
            <div>
            @if($comments)
                <ul style="list-style: none; padding: 0">
                @foreach($comments as $comment)
                    <li class="panel-body">
                        <div class="list-group">
                            <div class="list-group-item">
                                <h3>{{ $comment->author->name }}</h3>
                                <p>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</p>
                            </div>
                            <div class="list-group-item">
                                <p>{{ $comment->body }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
            @endif -->
            </div>
    	</div>
    </div>
  </div>


@stop