@extends('layouts.app')

@section('content')
    <h1 class="display-4 text-center">Edit Post</h1>
    <div class="container">
            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Body'])}}
            </div>
            <div class = 'form-group'> 
                    {{Form::file('cover_image')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
