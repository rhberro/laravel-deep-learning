<?php

namespace App\Traits\Http;

trait Forbidden
{
    /**
     * Abort the application with a forbidden
     * response.
     *
     * @return \Illuminate\Http\Response
     */
    public function forbiddenResponse()
    {
        abort(403);
    }
}
