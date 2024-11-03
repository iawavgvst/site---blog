<?php

namespace App\Services\User;

use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class Service
{
    public function store($data, $password)
    {
        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Mail::to($data['email'])->send(new PasswordMail($password));
        event(new Registered($user));
    }

    public function update($category, $data)
    {
        $category->update($data);
    }
}
