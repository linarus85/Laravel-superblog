<?php

namespace App\Http\Controllers\Admin\Post;

use App\Post;
use App\Http\Requests\Admin\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();
        $this->service->store($data);
        return redirect()->route('post.index');
    }
}
