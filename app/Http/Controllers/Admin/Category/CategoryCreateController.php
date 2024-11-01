<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\Category\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryCreateController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.category.create', compact('posts'));
    }
}
