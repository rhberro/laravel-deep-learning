<?php

namespace App\Social\Composers;

use Illuminate\View\View;

use App\Social\Contracts\Repositories\ProjectRepository;

class ProjectComposer
{
    /**
     * The project repository implementation.
     *
     * @var ProjectRepository
     */
    protected $repository;

    /**
     * Create a new profile composer.
     *
     * @param  ProjectRepository  $repository
     * @return void
     */
    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('project', $this->repository->current());
    }
}