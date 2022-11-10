@extends('layouts.app')
@section('title')
{{ $user->name }}
@endsection
@section('content')
<div>
  <ul class="list-group">
    <li class="list-group-item">
      Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
        <style>
          .table-padding td{
            padding: 3px 8px;
          }
        </style>
		
        <tr>
          <td>Всего постов</td>
          <td> {{$posts_count}}</td>
          @if($posts_count && ($user->id == Auth::user()->id || Auth::user()->role == 'admin'))
          <td><a href="{{route('my-all-posts',['id'=>Auth::user()->id])}}">Показать все</a></td>
          @endif
        </tr>
        <tr>
          <td>Опубликованные посты</td>
          <td>{{$posts_active_count}}</td>
          @if($posts_active_count && ($user->id == Auth::user()->id || Auth::user()->role == 'admin' ))
          <td><a href="{{route('user_posts_public',['id'=>Auth::user()->id])}}">Показать все</a></td>
          @endif
        </tr>
        <tr>
          <td>Постов в Черновиках</td>
          <td>{{$posts_draft_count}}</td>
          @if($posts_draft_count && ($user->id == Auth::user()->id || Auth::user()->role == 'admin'))
          <td><a href="{{route('my-drafts',['id'=>Auth::user()->id])}}">Показать все</a></td>
          @endif
        </tr>
      </table>
    </li>
    <li class="list-group-item">
	<tr>
          <td>Всего комментариев</td>
          <td> {{$comments_count}}</td>
          @if($posts_count && ($user->id == Auth::user()->id || Auth::user()->role == 'admin'))
          <td><a href="{{route('my-all-comments',['id'=>Auth::user()->id])}}">Показать все</a></td>
          @endif
        </tr>
     
    </li>
  </ul>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><h3>Последние посты</h3></div>
  <div class="panel-body">
    @if(!empty($latest_posts[0]))
    @foreach($latest_posts as $latest_post)
      <p>
        <strong><a href="{{route('show',['slug'=>$latest_post->slug])}}">{{ $latest_post->title }}</a></strong>
        <span class="well-sm">От {{ $latest_post->created_at->format('M d,Y \a\t h:i a') }}</span>
      </p>
    @endforeach
    @else
    <p>У вас нет ещё постов.</p>
    @endif
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><h3>Последние комментарии</h3></div>
  <div class="list-group">
    @if(!empty($latest_comments[0]))
    @foreach($latest_comments as $latest_comment)
      <div class="list-group-item">
        <p>{{ $latest_comment->body }}</p>
        <p>On {{ $latest_comment->created_at->format('M d,Y \a\t h:i a') }}</p>
	@if(!Auth::guest() && ($user->id == Auth::user()->id || Auth::user()->role == 'admin')))
		
       <p>On post <a href="{{route('commentShow',['on_post'=>$latest_comment->on_post,'from_user'=>$latest_comment->from_user])}}">{{ $latest_comment->post->title }}</a></p>
    @else
       <p>On post {{ $latest_comment->post->title }}</p>
    @endif
        
      </div>
    @endforeach
    @else
    <div class="list-group-item">
      <p>У вас нет комментариев. Ваши последние 5 комментариев будут выведены здесь</p>
    </div>
    @endif
  </div>
</div>
@endsection