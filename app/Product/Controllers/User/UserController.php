<?php

namespace App\Product\Controllers\User;

use App\Http\Controllers\Controller;
use App\Product\Repositories\User\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->all();

        return $users;
    }
}
