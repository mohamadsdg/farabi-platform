<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $user = null;

    /**
     * Get the current user.
     *
     * @param string $key
     * @return mixed|null
     */
    protected function getUser($key = null)
    {
        if ($this->user === null) {
            $this->user = Auth::user();
        }

        if (!$this->user) {
            return null;
        }

        if ($key === null) {
            return $this->user;
        }

        return $this->user->{$key};
    }
}
