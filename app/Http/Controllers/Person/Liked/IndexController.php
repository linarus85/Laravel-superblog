<?php

namespace App\Http\Controllers\Person\Liked;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $post = auth()->user()->likedPost;
        return view('person.liked.index', compact('post'));
    }
}
