<?php

namespace App\Http\Controllers\Account\Like;

use App\Http\Controllers\Account\Like\BaseController;

class LikeController extends BaseController
{
    public function __invoke()
    {
        return view('account.like.index');
    }
}
