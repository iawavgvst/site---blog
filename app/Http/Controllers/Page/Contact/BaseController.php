<?php

namespace App\Http\Controllers\Page\Contact;

use App\Http\Controllers\Controller;
use App\Services\Message\Service;

class BaseController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
