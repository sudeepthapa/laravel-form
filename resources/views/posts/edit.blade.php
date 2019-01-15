@extends('layouts.app')
@section('content')


{!!Form::model($post,['method'=>'PUT', 'action'=>['PostController@update', $post->id]]) !!}
        {{csrf_field()}}
    <div class="form-group">
        {!!Form::label('title', 'Title:') !!}
        {!!Form::text('title',$post->title, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!Form::label('content', 'Body Text:') !!}
        {!!Form::textarea('content',$post->content, ['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Update Post',['class'=>'btn btn-info']) !!}
    {{-- {!! Form::hidden('_method', 'PUT') !!} --}}

{!!Form::close() !!}

@endsection