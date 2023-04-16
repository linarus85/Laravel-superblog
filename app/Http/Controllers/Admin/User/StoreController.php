<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\User\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();
        $this->service->store($data);
        return redirect()->route('user.index');
    }
}
