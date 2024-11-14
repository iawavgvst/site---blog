<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::all();
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(17);
        $date = Carbon::parse($post->created_at);
        return view('blog.post.index', compact('posts', 'likedPosts', 'date'));
    }
}
