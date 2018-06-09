<?php

namespace App\Providers\Views;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * The view composers.
     */
    protected $composers = [
        'layouts._navbar' => 'App\Social\Composers\ProjectComposer',
    ];

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->composers as $view => $composer) {
            View::composer($view, $composer);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}