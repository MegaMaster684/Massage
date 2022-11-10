@extends('layouts.app')
@section('title')
    My comments 
@endsection

@section('content')

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

@endsection