<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Auth;

class LikeController extends Controller
{
    //like
    public function upvote(Request $request){
        $post = Post::find($request->input('post'));
        if(!$post){
            return abort(404, 'Post not found');
        }
        Auth::user()->upvote($post);
        return 'OK';
    }
    // dislike
    public function downvote(Request $request){
        $post = Post::find($request->input('post'));
        if(!$post){
            return abort(404, 'Post not found');
        }
        Auth::user()->downvote($post);
        return 'OK';
    }

    // favorite
    public function toggleFavorite(Request $request){
        $post = Post::find($request->input('post'));
        if(!$post){
            return abort(404, 'Post Not Found');
        }
        Auth::user()->toggleFavorite($post);
        return 'OK';
    }

    public function favorite()
    {
        $fav = Auth::user()->favorites(Post::class)->get();
        return view('posts.favorite')->with('posts', $fav);
    }

}
