<?php

namespace App\Http\Controllers\Person\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('person.main.index');
    }
}
