@extends('layouts.app')
@section('title')
Редактировать пост
@endsection
@section('content')

<form method="post" action="/update" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
  <input type="hidden" name="slug" value="{{ $post->slug }}"/>
  
  <div class="form-group">
    <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
  </div>
  <div class="form-group">
    <textarea name='body'class="form-control">
      @if(!old('body'))
      {!! $post->body !!}
      @endif
      {!! old('body') !!}
    </textarea>
  </div>
  @if($post->active == '1')
  <input type="submit" name='publish' class="btn btn-success" value = "Обновить"/>
  @else
  <input type="submit" name='publish' class="btn btn-success" value = "Опубликовать"/>
  @endif
  <input type="submit" name='save' class="btn btn-default" value = "Сохранить как черновик" />

  <a href="{{  url('delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Удалить</a>
   
  <label for="scales" class="btn btn-default">Только для аутентифицированных пользователей</label>
  <input type="checkbox" id="scales"  class="btn btn-default" name="show"  value = "hide" >
  {{ $post->show }}
</form>
@endsection