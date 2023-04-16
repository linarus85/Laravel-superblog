<?php

namespace App\Http\Controllers\Person\Comment;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateMessageRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateMessageRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('comment.index');
    }
}
