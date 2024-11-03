<?php

namespace App\Services\User;

use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class Service
{
    public function store($data, $password)
    {
        User::firstOrCreate(['email' => $data['email']], $data);
        Mail::to($data['email'])->send(new PasswordMail($password));
    }

    public function update($category, $data)
    {
        $category->update($data);
    }
}
