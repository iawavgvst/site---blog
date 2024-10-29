<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::paginate(10);
        return view('admin.post.index', compact('posts'));
    }
}
