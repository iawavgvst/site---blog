<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Page\Contact\BaseController;
use App\Models\Message;

class MessageController extends BaseController
{
    public function __invoke()
    {
        $messages = Message::paginate(15);
        return view('admin.message.index', compact('messages'));
    }
}
