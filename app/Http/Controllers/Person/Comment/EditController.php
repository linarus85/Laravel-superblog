<?php

namespace App\Http\Controllers\Person\Comment;

use App\Comment;
use App\Http\Controllers\Controller;


class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('person.comment.edit', compact('comment'));
    }
}
