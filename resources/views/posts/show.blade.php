@extends('layouts.app')

@section('content')
    <div class="well">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}<br>{{$post->created_at}}</p>
    </div>
@endsection