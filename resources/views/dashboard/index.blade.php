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
         <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}</h2>
            <form enctype="multipart/form-data" action="/dashboard" method="POST">
                <label>Изменение аватара</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Отправить" class="pull-right btn btn-sm btn-primary">
            </form>
       </div>
     </div>
   </div>
  </div>
@stop