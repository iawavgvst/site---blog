<?php

namespace App\Services\Message;

use App\Models\Message;

class Service
{
    public function store($data)
    {
        Message::create($data);
    }
}
