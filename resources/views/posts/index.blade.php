@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
            <td><a class="btn btn-secondary" href="/posts/{{$post->id}}/edit">edit</a></td>
            <td>
            {!!Form::model($post,['method'=>'DELETE', 'action'=>['PostController@destroy', $post->id]]) !!}
                {{ csrf_field()}}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
            </td>
        </tr>

        @endforeach
    </table>
@endsection