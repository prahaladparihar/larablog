@extends('layouts.app')

@section('content')
    <h1>Favorite Posts</h1>
    {{-- {{dd($posts)}} --}}

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card py-3 pl-3 pr-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%;" class="rounded"  src = "/storage/cover_image/{{$post->cover_image}}" alt="cover_image">
                    </div>
                    <div class="col-md-7 col-sm-8">
                        <h3 class="card-title  pl-2"> <a href="/posts/{{$post->id}}"> {{$post->title}}</a> </h3>
                        <small class="card-subtitle mb-2 pl-3 text-muted"> Written on {{$post->created_at->format('d M y')}} by {{$post->user->name}} </small>
                        <p class="card-text text-justify pl-3 py-2"> {!! Str::limit($post->body, 50, '...') !!} </p>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        {{-- {{$posts->links()}} --}}
    @else
        <p>No Post Found!</p>
    @endif
@endsection
