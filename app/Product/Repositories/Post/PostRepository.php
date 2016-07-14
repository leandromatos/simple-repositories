<?php

namespace App\Product\Repositories\Post;

use App\Product\Models\Post;
use App\Product\Models\User;
use App\Product\Repositories\Post\PostInterface;

class PostRepository implements PostInterface
{
    public function all()
    {
        return Post::all();
    }

    public function from(User $user)
    {
        return Post::where('user_id', $user->id)->get();
    }
}
