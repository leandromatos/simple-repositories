<?php

namespace App\Product\Repositories\User;

use App\Product\Models\User;
use App\Product\Repositories\User\UserInterface;

class UserRepository implements UserInterface
{
    public function all()
    {
        return User::all();
    }
}
