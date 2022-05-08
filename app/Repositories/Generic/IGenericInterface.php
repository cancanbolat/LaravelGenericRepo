<?php 

namespace App\Repositories\Generic;

use Illuminate\Database\Eloquent\Model;

interface IGenericInterface
{
    public function create(array $attributes): Model;
    public function find($id): ?Model;
}