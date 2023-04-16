<?php

namespace App\Http\Controllers\Admin\Post;

use App\Post;
use App\Http\Requests\Admin\Post\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $req, Post $post)
    {
        $data = $req->validated();
        $post =  $this->service->update($data, $post);

        return view('admin.post.show', compact('post'));
    }
}
