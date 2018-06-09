<?php

namespace App\Providers\Repositories;

use App\Social\Contracts\Repositories\UserRepository;
use App\Social\Repositories\User\UserEloquentRepository;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bind the interfaces.
     *
     * @return void
     */
    public function register()
    {
        $this->bindInterfaces();
    }

    /**
     * Bind the repository to the interface.
     *
     * @return void
     */
    private function bindInterfaces()
    {
        $this->app->singleton(UserRepository::class, UserEloquentRepository::class);
    }
}
