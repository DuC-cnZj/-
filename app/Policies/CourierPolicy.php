<?php

namespace App\Policies;

use App\User;
use App\Courier;
use Illuminate\Auth\Access\HandlesAuthorization;

class CourierPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the courier.
     *
     * @param  \App\User  $user
     * @param  \App\Courier  $courier
     * @return mixed
     */
    public function view(User $user, Courier $courier)
    {
        //
    }

    /**
     * Determine whether the user can create couriers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
         return $user->email === 'admin@qq.com';
    }

    /**
     * Determine whether the user can update the courier.
     *
     * @param  \App\User  $user
     * @param  \App\Courier  $courier
     * @return mixed
     */
    public function update(User $user, Courier $courier)
    {
        //
    }

    /**
     * Determine whether the user can delete the courier.
     *
     * @param  \App\User  $user
     * @param  \App\Courier  $courier
     * @return mixed
     */
    public function delete(User $user, Courier $courier)
    {
            return $user->email === 'admin@qq.com';
    }
}
