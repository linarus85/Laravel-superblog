<?php

namespace App\Http\Controllers\Person\Comment;

use App\Comment;
use App\Http\Controllers\Controller;


class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comment.index');
    }
}
