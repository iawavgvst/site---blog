<?php

namespace App\Http\Controllers\Page\Contact;

use App\Http\Requests\Message\StoreRequest;

class ContactStoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('contact')->with('message', 'Successfully!');
    }
}
