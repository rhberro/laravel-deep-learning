<?php

namespace App\Social\Repositories;

use Illuminate\Container\Container;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use InvalidArgumentException;

abstract class EloquentRepository
{
    /**
     * The container instance.
     *
     * @var \Illuminate\Container\Container
     */
    protected $app;

    /**
     * The authentication instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    public $request;

    /**
     * The model class name.
     *
     * @var string
     */
    protected $model;

    /**
     * The model relationships.
     *
     * @var array
     */
    protected $relationships;

    /**
     * The model relationships counters.
     *
     * @var array
     */
    protected $counters;

    /**
     * Create a new repository instance.
     *
     * @param  \Illuminate\Container\Container $app
     * @param  \Illuminate\Contracts\Auth\Factory $auth
     * @param  \Illuminate\Http\Request $request
     */
    public function __construct(Container $app, Factory $auth, Request $request)
    {
        $this->app = $app;
        $this->auth = $auth;
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    public function all($columns = ['*'])
    {
        return $this->newQuery()->all($columns);
    }

    /**
     * {@inheritdoc}
     */
    public function paginate($quantity = 10, $columns = ['*'])
    {
        return $this->newQuery()->paginate($quantity, $columns);
    }

    /**
     * {@inheritdoc}
     */
    public function find($id, $columns = ['*'])
    {
        return $this->newQuery()->findOrFail($id, $columns);
    }

    /**
     * {@inheritdoc}
     */
    public function store(Request $request)
    {
        return $this->newModel()->fill($request->all())->save();
    }

    /**
     * {@inheritdoc}
     */
    public function update(Model $model, Request $request)
    {
        return $model->fill($request->all())->save();
    }

    /**
     * Create a new model instance.
     *
     * @return \Illuminate\Database\Eloquent\Model
     *
     * @throws \InvalidArgumentException
     */
    public function newModel()
    {
        $model = $this->app->make($this->model);

        if (!$model instanceof Model) {
            throw new InvalidArgumentException('Model must be an instance of \Illuminate\Database\Eloquent\Model.');
        }

        return $model;
    }

    /**
     * Create a new query builder with the relationships
     * and the relationships counters.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     *
     * @throws \InvalidArgumentException
     */
    public function newQuery()
    {
        $builder = $this->newModel()->newQuery();

        if ($relationships = $this->relationships) {
            $builder->with($relationships);
        }

        if ($counters = $this->counters) {
            $builder->withCount($counters);
        }

        return $builder;
    }
}
