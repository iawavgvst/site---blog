<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostEditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }
}
