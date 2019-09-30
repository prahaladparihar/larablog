@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">
        <i class="fa fa-undo" aria-hidden="true"> Go Back</i>
        {{-- {{dd(Auth::user()->favorites(App\Post::class)->get())}} --}}
    </a>
    <div class="row auto">
        @guest
        <div class="col-2 pl-4 ml-4">
                
        </div>
        @else
        <div class="col-2 pl-4 ml-4">
            {{($post->upvoters()->count())}} 
                <a onclick="upvote({{$post->id}})" >
                    @if (Auth::user()->hasUpvoted($post))
                        <i class="fa fa-thumbs-up fa-2x"  style="color:red;" aria-hidden="true"></i><br><br>
                    @else
                        <i class="fa fa-thumbs-o-up fa-2x"  aria-hidden="true"></i><br><br>
                    @endif

                </a>
            {{($post->downvoters()->count())}}
                <a onclick="downvote({{$post->id}})" >
                    @if (Auth::user()->hasDownvoted($post))
                        <i class="fa fa-thumbs-down fa-2x"  style="color:blue;" aria-hidden="true"></i><br><br>
                    @else
                        <i class="fa fa-thumbs-o-down fa-2x" aria-hidden="true"></i><br><br>
                    @endif

                </a>

                <a onclick="toggleFavorite({{$post->id}})" >
                    @if (Auth::user()->hasFavorited($post))
                        <i class="fa fa-heart fa-2x"  style="color:red;" aria-hidden="true"></i><br><br>
                    @else
                        <i class="fa fa-heart-o fa-2x" aria-hidden="true"></i><br><br>
                    @endif

                </a>
        </div>
        @endguest
        <div class="col-md-8">
            <h1 class="display-4 text-center">{{$post->title}}</h1>
            <small class = 'text muted pull-right mb-1'>by {{$post->user->name}} on {{$post->created_at->format('d M y')}}</small>
            &nbsp; <br> <br>
            <img style="width:100%;"class="rounded" src = "/storage/cover_image/{{$post->cover_image}}" alt="cover_image">
            <br><br>
            <h6 class="text-muted float-right">  </h6>
            <div class="text-justify">
                {!! $post->body !!}
            </div>
        </div>
    </div>
    <hr>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user->id)
            <div class="row justify-content-center">
                    <div class="col-1">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">
                                <i class="fa fa-pencil" aria-hidden="true">Edit</i>
                            </a>
                    </div>
                    <div class="col-1">
                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger    '])}}
                        {!! Form::close() !!}
                    </div>
                </div>
        @endif
    @endif
@endsection
