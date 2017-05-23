<?php

namespace App\Policies;

use App\User;
use App\Substation;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubstationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the substation.
     *
     * @param  \App\User  $user
     * @param  \App\Substation  $substation
     * @return mixed
     */
    public function view(User $user, Substation $substation)
    {
        //
    }

    /**
     * Determine whether the user can create substations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->email === 'admin@qq.com';
    }

    /**
     * Determine whether the user can update the substation.
     *
     * @param  \App\User  $user
     * @param  \App\Substation  $substation
     * @return mixed
     */
    public function update(User $user, Substation $substation)
    {
        //
    }

    /**
     * Determine whether the user can delete the substation.
     *
     * @param  \App\User  $user
     * @param  \App\Substation  $substation
     * @return mixed
     */
    public function delete(User $user, Substation $substation)
    {
        // return false;
        return $user->email === 'admin@qq.com';
    }

    public function show(User $user)
    {
       return $user->email === 'admin@qq.com';
    }
}
