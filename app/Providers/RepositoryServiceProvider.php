<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\IUserRepository;
use App\Repositories\UserRepository;

use App\Repositories\Generic\IUserRepo;
use App\Repositories\Generic\UserRepo;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IUserRepository::class, UserRepository::class);
        $this->app->bind(IUserRepo::class, UserRepo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
