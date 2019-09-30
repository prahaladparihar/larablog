@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="display-4 text-center">Your Posts</h4>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                <a href = '/posts/create' class = 'btn btn-primary pull-right'>Create New Post</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($posts) > 0)
                        <table class = 'table table-hover'>
                            <thead>
                                <tr>
                                    {{-- <th>Title</th>
                                    <th> Edit</th>
                                    <th> </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}<br><small class="text-muted">Written on {{$post->created_at->format('d M y')}}</small></td>
                                        <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning float-right" style="margin-left:500px;">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>Edit
                                            </a>
                                        </td>
                                        <td>
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class = 'display-4 text-danger text-center'> You have no posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
