<?php

namespace App\Product\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Product\Repositories\Post\PostRepository;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->all();

        return $posts;
    }
}
