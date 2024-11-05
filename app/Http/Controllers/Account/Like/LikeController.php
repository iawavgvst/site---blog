<?php

namespace App\Http\Controllers\Account\Like;

use App\Http\Controllers\Account\Like\BaseController;

class LikeController extends BaseController
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;
        return view('account.like.index', compact('posts'));
    }
}
