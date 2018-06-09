<?php

namespace App\Social\Repositories;

use App\Social\Contracts\Repositories\UserRepository;
use App\Social\Repositories\EloquentRepository;
use App\Social\Traits\Searchable;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserEloquentRepository extends EloquentRepository implements UserRepository
{
    use Searchable;

    /**
     * The model class name.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * The model searchable attributes.
     *
     * @var array
     */
    protected $searchable = ['name', 'email'];

    /**
     * {@inheritdoc}
     */
    public function store(Request $request)
    {
        $parameters = $this->encryptParameters($request);

        return $this->newModel()->fill($parameters)->save();
    }

    /**
     * {@inheritdoc}
     */
    public function update(Model $model, Request $request)
    {
        $parameters = $this->encryptParameters($request);

        return $model->fill($parameters)->save();
    }
    
    /**
     * Encrypt the request data before updating or creating
     * an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function encryptParameters(Request $request)
    {
        $parameters = $request->except('password', 'password_confirmation');

        if ($request->has('password')) {
            $parameters += [
                'password' => bcrypt($request->get('password'))
            ];
        }

        return $parameters;
    }
}
