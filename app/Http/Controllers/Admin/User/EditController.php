<?php

namespace App\Http\Controllers\Admin\User;

use App\User;

class EditController extends BaseController
{
    public function __invoke(User $user)
    {
        $role  = User::getRole();
        return view('admin.user.edit', compact('user', 'role'));
    }
}
