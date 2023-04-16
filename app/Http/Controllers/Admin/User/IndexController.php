<?php

namespace App\Http\Controllers\Admin\User;

use App\User;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $user  = User::all();
        return view('admin.user.index', compact('user'));
    }
}
