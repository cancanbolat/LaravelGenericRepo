<?php

namespace App\Http\Controllers;

use App\Repositories\Generic\UserRepo;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    private $userRepo;

    public function __construct(UserRepo $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        $users = $this->userRepo->all();
        return response()->json($users, 200);
    }
}
