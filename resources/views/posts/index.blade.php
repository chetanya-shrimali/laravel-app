@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
    <div class="well">
        <a href="/posts/{{$post->id}}">{{$post->title}}--> {{$post->body}}<br>{{$post->created_at}}</a>
    </div>
    @endforeach
    {{$posts -> links()}}
@endsection