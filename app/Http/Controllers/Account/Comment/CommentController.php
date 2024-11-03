<?php

namespace App\Http\Controllers\Account\Comment;

use App\Http\Controllers\Account\Comment\BaseController;

class CommentController extends BaseController
{
    public function __invoke()
    {
        return view('account.comment.index');
    }
}
