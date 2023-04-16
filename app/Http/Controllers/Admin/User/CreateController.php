<?php

namespace App\Http\Controllers\Admin\User;

use App\User;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $role = User::getRole();
        return view('admin.user.create', compact('role'));
    }
}
