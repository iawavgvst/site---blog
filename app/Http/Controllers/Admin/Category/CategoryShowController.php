<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\Category\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryShowController extends BaseController
{
    public function __invoke(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }
}
