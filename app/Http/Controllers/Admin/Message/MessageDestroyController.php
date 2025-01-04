<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Page\Contact\BaseController;
use App\Models\Message;

class MessageDestroyController extends BaseController
{
    public function __invoke(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.message.index');
    }
}
