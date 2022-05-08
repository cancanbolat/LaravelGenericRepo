<?php 

namespace App\Repositories;
use App\Repositoies;
use App\Models\User;

class UserRepository implements IUserRepository{

    public function getAllUsers(){
        return User::all();
    }

    public function getUserById($id){
        return User::find($id);
    }

    public function createOrUpdate($id = null){
        if (is_null($id)) {
            # create
            $user = new User();
            $user->name = 'Can Canbolat';
            $user->email = 'cancan@yahoo.com';
            $user->password = '123456';
            return $user->save();
        }else{
            # update
            $user = User::find($id);
            $user->name = 'Alex de Souza';
            $user->email = 'alex@gmail.com';
            $user->password = '987654';
            return $user->save();
        }
    }

}