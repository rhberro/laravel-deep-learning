<?php

namespace App\Providers\Repositories;

use App\Social\Contracts\Repositories\ProjectRepository;
use App\Social\Repositories\ProjectEloquentRepository;

use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
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
        $this->app->singleton(ProjectRepository::class, ProjectEloquentRepository::class);
    }
}
