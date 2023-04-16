<?php

namespace App\Http\Controllers\Page\Comment;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\CommentRequest;
use App\Post;

class CommentController extends Controller
{
    public function __invoke(Post $post, CommentRequest $req)
    {
        $data = $req->validated();
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;
        Comment::create($data);
        return redirect()->route('page.index', $post->id);
    }
}
