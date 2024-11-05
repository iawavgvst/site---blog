<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\User\StoreRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserStoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $password = Str::random(13);

        $data['password'] = Hash::make($password);

        $this->service->store($data, $password);

        return redirect()->route('admin.user.index');
    }
}
