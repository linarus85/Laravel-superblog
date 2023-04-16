<?php

namespace App\Http\Controllers\Admin\User;

use App\User;

class DeleteController extends BaseController
{
    public function __invoke(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
