<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The account social network.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function socialNetwork()
    {
        return $this->belongsTo(SocialNetwork::class);
    }

    /**
     * The account project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
