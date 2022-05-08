<?php

namespace App\Repositories\Generic;

use Illuminate\Support\Collection;

interface IUserRepo
{
    public function all(): Collection;
}
