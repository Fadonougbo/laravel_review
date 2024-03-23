<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class HomePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        
    }

    public function viewAny2(User $user) {

        return true;
    }
}
