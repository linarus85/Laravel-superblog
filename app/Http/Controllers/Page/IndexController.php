<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {
        // Carbon::setLocale('ru_RU');
        $date = Carbon::parse($post->created_at);
        return view('page.index', compact('post', 'date'));
    }
}
