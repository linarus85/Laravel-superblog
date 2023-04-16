<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(3);
        // $random = Post::get()->random(3);
        $liked = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(3);
        return view('main.index', compact('posts', 'liked'));
    }
}
