<?php

namespace App\Services\User;

use App\Models\User;

class Service
{
    public function store($data)
    {
        User::firstOrCreate(['email' => $data['email']], $data);
    }

    public function update($category, $data)
    {
        $category->update($data);
    }
}
