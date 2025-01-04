<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Page\Contact\BaseController;
use App\Models\Message;

class MessageShowController extends BaseController
{
    public function __invoke(Message $message)
    {
        return view('admin.message.show', compact('message'));
    }
}
