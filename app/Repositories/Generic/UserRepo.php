<?php

namespace App\Repositories\Generic;
use App\Models\User;
use App\Repositories\Generic\IUserRepo;
use Illuminate\Support\Collection;

class UserRepo extends GenericRepository implements IUserRepo
{
    public function __construct(User $model) {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();    
    }
}
