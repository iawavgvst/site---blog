<?php

namespace App\Http\Controllers\Account\Like;

use App\Http\Controllers\Account\Like\BaseController;
use App\Models\Post;

class LikeDestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('account.liked.index');
    }
}
