@extends('layouts.app')

@section('title')

{{$article->title}}

@endsection

@section('content')

<h3>{{$article->title}}</h3>

<p>
	{{$article->content}}
</p>

	<form method="POST" action='{{url("articles/$article->id")}}'>
		{{ csrf_field() }}
  		<input type="text" name="comment_box">
  		<input type="submit" value="Add Comment">
  	</form><br>		

@if($article->user->id == Auth::user()->id)
	<a href='{{url("articles/$article->id/edit")}}'><button>Edit This Article</button></a>
	<a href='{{url("articles/$article->id/delete")}}'><button>Delete This Article</button></a>
@endif
@endsection