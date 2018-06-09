<?php

namespace App\Social\Repositories;

use App\Project;
use App\Social\Contracts\Repositories\ProjectRepository;
use App\Social\Repositories\EloquentRepository;
use App\Social\Traits\Searchable;

class ProjectEloquentRepository extends EloquentRepository implements ProjectRepository
{
    use Searchable;

    /**
     * The model class name.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * The model searchable attributes.
     *
     * @var array
     */
    protected $searchable = ['name', 'description'];
    
    /**
     * {@inheritdoc}
     */
    public function authenticatedUser($quantity = 10, $columns = ['*'])
    {
        $relationship = $this->auth->user()->projects();
        return $this->makeSearchable($relationship->getQuery())->paginate($quantity, $columns);
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return $this->request->session()->get('project');
    }
}
