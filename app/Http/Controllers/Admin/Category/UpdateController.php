<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $req, Category $category)
    {
        $data = $req->validated();
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }
}
