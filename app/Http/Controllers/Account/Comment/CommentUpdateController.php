<?php

namespace App\Http\Controllers\Account\Comment;

use App\Http\Controllers\Account\Comment\BaseController;
use App\Http\Requests\Account\Comment\StoreRequest;
use App\Models\Comment;

class CommentUpdateController extends BaseController
{
    public function __invoke(StoreRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);

        return redirect()->route('account.comment.index');
    }
}
