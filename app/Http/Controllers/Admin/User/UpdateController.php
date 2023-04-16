<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\User\UpdateRequest;
use App\User;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $req, User $user)
    {
        $data = $req->validated();
        $user =  $this->service->update($data, $user);

        return view('admin.user.show', compact('user'));
    }
}
