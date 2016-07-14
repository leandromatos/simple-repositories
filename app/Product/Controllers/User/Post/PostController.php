<?php

namespace App\Product\Controllers\User\Post;

use App\Http\Controllers\Controller;
use App\Product\Models\User;
use App\Product\Repositories\Post\PostRepository;

class PostController extends Controller
{
    protected $post;

    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    public function index(User $user)
    {
        $posts = $this->posts->from($user);

        return $posts;
    }
}
