@extends('layouts.app')

@section('keywords')ключ1, ключ2 @stop

@section('description')Описание@stop

@section('title')Личный кабинет@stop

@section('content')
	    <div class="page-header">
        <div class="row">
          <div class="col-md-12">
            <h1>Личный кабинет</h1>
          </div>
        </div>
      </div>
      <div class="work">
    <div class="row">
      <div class="col-md-12">
        <div id="dashboard">
        	{{ $user->name }}
        </div>
      </div>
    </div>
  </div>
@stop