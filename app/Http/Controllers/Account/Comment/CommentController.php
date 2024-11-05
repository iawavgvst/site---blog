<?php

namespace App\Http\Controllers\Account\Comment;

use App\Http\Controllers\Account\Comment\BaseController;
use App\Models\Post;

class CommentController extends BaseController
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        return view('account.comment.index', compact('comments'));
    }
}
