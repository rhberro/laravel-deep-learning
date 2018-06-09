<?php

namespace App\Social\Contracts\Repositories;

use App\Social\Contracts\Repository;

interface ProjectRepository extends Repository
{
    /**
     * Search for projects that belongs to the authenticated user.
     *
     * @param  int  $quantity
     * @param  array  $columns
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     *
     * @throws \InvalidArgumentException
     */
    public function authenticatedUser($quantity = 10, $columns = ['*']);

    /**
     * Retrieves the current project from the session.
     * 
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function current();
}
