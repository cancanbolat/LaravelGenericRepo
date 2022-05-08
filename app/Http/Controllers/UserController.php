<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\IUserRepository;

class UserController extends Controller
{
    protected $user = null;

    public function __construct(IUserRepository $user)
    {
        $this->user = $user;
    }

    public function showUsers()
    {
        $users = $this->user->getAllUsers();
        return response()->json($users, 200);
    }

    public function getUser($id)
    {
        $user = $this->user->getUserById($id);
        return response()->json($user, 200);
    }

    public function saveUser($id = null)
    {
        if ($id) {
            $this->user->createOrUpdate($id);
        } else {
            $this->user->createOrUpdate();
        }
        return response()->json($this->user, 201);
    }
}
