<?php

namespace App\Http\Controllers\Admin\Post;

use App\Post;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
