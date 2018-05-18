@extends('layouts.app')

@section('content')
    @if (count($articles)>0)
        @foreach ($articles as $article)
        <div class="well"><h1>{{$article->title}}</h1><br><p>{{$article->body}}</p></div>
        @endforeach
        {{$articles->links()}}
    @endif

@endsection