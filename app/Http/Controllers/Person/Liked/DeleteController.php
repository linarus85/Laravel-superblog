<?php

namespace App\Http\Controllers\Person\Liked;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        $post = auth()->user()->likedPost()->detach($post->id);
        return redirect()->route('liked.index');
    }
}
