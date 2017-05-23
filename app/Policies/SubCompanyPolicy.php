<?php

namespace App\Policies;

use App\User;
use App\SubCompany;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubCompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the subCompany.
     *
     * @param  \App\User  $user
     * @param  \App\SubCompany  $subCompany
     * @return mixed
     */
    public function view(User $user, SubCompany $subCompany)
    {
        //
    }

    /**
     * Determine whether the user can create subCompanies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->email === 'admin@qq.com';
    }

    /**
     * Determine whether the user can update the subCompany.
     *
     * @param  \App\User  $user
     * @param  \App\SubCompany  $subCompany
     * @return mixed
     */
    public function update(User $user, SubCompany $subCompany)
    {
        return $user->email === 'admin@qq.com';
    }

    /**
     * Determine whether the user can delete the subCompany.
     *
     * @param  \App\User  $user
     * @param  \App\SubCompany  $subCompany
     * @return mixed
     */
    public function delete(User $user, SubCompany $subCompany)
    {
            // return false;
            return $user->email === 'admin@qq.com';
    }

    public function show(User $user)
    {
        return $user->email === 'admin@qq.com';
    }
}
