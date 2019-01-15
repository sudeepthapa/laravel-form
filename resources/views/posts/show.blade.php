@extends('layouts.app')

@section('content')
    <div class="card p-3">
        <h1>{{$post->title}}</h1>
    <img style="max-width:10%" src="{{$post->path}}" alt="Images">
        <section>
            {{$post->content}}
        
        </section>
    </div>
@endsection