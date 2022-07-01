<?php

use Illuminate\Contracts\Auth\Access\Gate;

if (! function_exists('gate')) {
    /**
     * Get the gate instance and/or inspect it.
     *
     * @param  string|null  $ability
     * @return \Illuminate\Auth\Access\Response|\Illuminate\Contracts\Auth\Access\Gate
     */
    function gate($ability = null, $arguments = [])
    {
        if (is_null($ability)) {
            return app(Gate::class);
        }

        return app(Gate::class)->inspect($ability, $arguments);
    }
}
