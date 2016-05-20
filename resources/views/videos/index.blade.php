@extends('layouts.app')

@section('keywords')ключ1, ключ2 @stop

@section('description')Описание@stop

@section('title')Видео@stop

@section('content')
	<div class="page-header">
        <div class="row">
          <div class="col-md-4">
            <h1>Видео</h1>
          </div>
          <div class="col-md-8">
            <ul id="work-filter">
              <li><a href="#" data-filter="*" class="btn btn-success ione-col">Показать все</a></li>
              <li><a href="#" data-filter=".films" class="btn ione-col">Фильмы</a></li>
              <li><a href="#" data-filter=".serials" class="btn ione-col">Сериалы</a></li>
              <li><a href="#" data-filter=".cartoons" class="btn ione-col">Мультфильмы</a></li>
              <li><a href="#" data-filter=".cartoonserials" class="btn ione-col">Мультсериалы</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="work">
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio" class="row isotope">
        	@foreach ($videos as $item)
				
          <div class="col-md-4  work-item isotope-item @if ($item->types_id == 1) films @elseif ($item->types_id == 2) serials @elseif ($item->types_id == 3) cartoons @else cartoonserials @endif">
            <div class="sample work-item-image-container">
              <div class="work-item-overlay">
                <a href="/video/{{ $item->url }}"><h2 style="color: #fff; padding: 10px;"> {{ $item->title }} </h2></a>
                <div style="color: #fff; padding: 10px;"> {!! $item->description !!} </div>
                <ul>
                <li><a class="detail-link" href="/video/{{ $item->url }}">Подробнее</a></li>
                </ul>
              </div>
              <img src="/uploads/videos/medium/{{ $item->img }}" alt="{{ $item->title }}" /> 
            </div>
          </div>
			@endforeach
        </div>
      </div>
    </div>
  </div>
@stop