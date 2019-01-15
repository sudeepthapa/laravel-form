
@extends('layouts.app')
@section('content')
{{-- <form action="{{ route('posts.store') }}" method="POST"> --}}
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

{!! Form::open(['method'=>'post', 'action'=>'PostController@store', 'files'=>'true'])!!}

    @csrf
    
    <div class="form-group">
        {!!Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control', 'placeholder'=>'TITLE HERE']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Body Text') !!}
        {!!Form::textarea('content',null , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::file('file',['class'=>'form-control']) !!}
    </div>
    {!!Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
{!! Form::close()  !!}


@endsection