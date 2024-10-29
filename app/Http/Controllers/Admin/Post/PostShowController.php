<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class PostShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }
}
