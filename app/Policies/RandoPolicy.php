<?php

namespace App\Policies;

use App\User;
use App\Rando;
use Illuminate\Auth\Access\HandlesAuthorization;

class RandoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
 
    }

    public function create(User $user){
        return $user->hasRole('admin');
    }

    public function store(User $user){
        return $user->hasRole('admin');
    }

    public function update(User $user, Rando $rando){
        return $user->hasRole('admin');
    }
}
