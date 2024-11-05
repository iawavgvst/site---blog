<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Requests\Admin\Category\StoreRequest;

class CategoryStoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.category.index');
    }
}
