<?php

namespace App\Http\Controllers\Account\Comment;

use App\Http\Controllers\Account\Comment\BaseController;
use App\Models\Comment;

class CommentDestroyController extends BaseController
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('account.comment.index');
    }
}
