<?php

namespace App\Traits\Eloquent;

use Carbon\Carbon;

use Collective\Html\Eloquent\FormAccessible;

trait Presentable
{
    use FormAccessible;

    /**
     * Return the creation date with a specific a human-readable
     * format.
     *
     * @param  string  $value
     * @return string
     */
    public function formCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y H:i:s');
    }

    /**
     * Return the update date with a specific a human-readable
     * format.
     *
     * @param  string  $value
     * @return string
     */
    public function formUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y H:i:s');
    }
}