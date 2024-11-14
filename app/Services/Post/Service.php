<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        $data['preview_image'] = Storage::put('/public',   $data['preview_image']);
        $data['background_image'] = Storage::put('/public',   $data['background_image']);

        Post::create($data);
    }

    public function update($post, $data)
    {
        $post->update($data);
    }
}
