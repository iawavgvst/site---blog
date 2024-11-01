<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\User\BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}
