<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $req, Tag $tag)
    {
        $data = $req->validated();
        $tag->update($data);
        return view('admin.tags.show', compact('tag'));
    }
}
