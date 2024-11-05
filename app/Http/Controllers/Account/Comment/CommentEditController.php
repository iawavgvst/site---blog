<?php

namespace App\Http\Controllers\Account\Comment;

use App\Http\Controllers\Account\Comment\BaseController;
use App\Models\Comment;

class CommentEditController extends BaseController
{
    public function __invoke(Comment $comment)
    {
        return view('account.comment.edit', compact('comment'));
    }
}
