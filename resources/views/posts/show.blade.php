@extends('layouts.app')
@section('title')
  @if($post)
    {{ $post->title }}
   
  @endif
@endsection
@section('title-meta')
<p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} Автор: <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
@endsection
@section('content')
@if($post)
  <div>
    {!! $post->body !!}
  </div>    
  <div>
    <h2>Оставить комментарий</h2>
  </div>
  @if(Auth::guest())
    <p>Залогинтесь, чтоб комментрировать</p>
  @else
	 
    <div class="panel-body">
      <form method="post" action="/comment/add">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" name="on_post" value="{{ $post->id }}"/>
		<input type="hidden" name="from_user" value="{{ Auth::user()->id }}"/>
        <input type="hidden" name="slug" value="{{ $post->slug }}"/>
        <div class="form-group">
          <textarea required="required" placeholder="Введите свой комментарий" name = "body" class="form-control"></textarea>
        </div>
        <input type="submit" name='post_comment' class="btn btn-success" value = "Опубликовать"/>
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
			
			@if(!Auth::guest() && ($comment->from_user == Auth::user()->id || Auth::user()->role == 'admin' ))
			  <h3> <a href="{{route('commentDistroy',['id'=>$comment->id])}}" class="btn btn-danger">Удалить</a></h3>
			 @endif 
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
    @endif
  </div>
@else
404 ошибка
@endif
@endsection