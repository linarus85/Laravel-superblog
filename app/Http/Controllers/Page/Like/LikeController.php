<?php

namespace App\Http\Controllers\Page\Like;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\CommentRequest;
use App\Post;

class LikeController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPost()->toggle($post->id);
        return redirect()->back();
    }
}
