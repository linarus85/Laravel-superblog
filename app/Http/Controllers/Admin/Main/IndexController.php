<?php

namespace App\Http\Controllers\Admin\Main;

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
        $users = User::all()->count();
        $categories = Category::all()->count();
        $posts = Post::all()->count();
        $tags = Tag::all()->count();
        return view('admin.main.index', compact('users', 'categories', 'posts', 'tags'));
    }
}
