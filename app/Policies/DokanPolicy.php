<?php

namespace App\Policies;

use App\User;
use App\Dokan;
use Illuminate\Auth\Access\HandlesAuthorization;

class DokanPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any dokans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the dokan.
     *
     * @param  \App\User  $user
     * @param  \App\Dokan  $dokan
     * @return mixed
     */
    public function view(User $user, Dokan $dokan)
    {
        //
    }

    /**
     * Determine whether the user can create dokans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if(\App\Dokan::count() == 1){
          return true;
        }
    }

    /**
     * Determine whether the user can update the dokan.
     *
     * @param  \App\User  $user
     * @param  \App\Dokan  $dokan
     * @return mixed
     */
    public function update(User $user, Dokan $dokan)
    {
        //
    }

    /**
     * Determine whether the user can delete the dokan.
     *
     * @param  \App\User  $user
     * @param  \App\Dokan  $dokan
     * @return mixed
     */
    public function delete(User $user, Dokan $dokan)
    {
        //
    }

    /**
     * Determine whether the user can restore the dokan.
     *
     * @param  \App\User  $user
     * @param  \App\Dokan  $dokan
     * @return mixed
     */
    public function restore(User $user, Dokan $dokan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the dokan.
     *
     * @param  \App\User  $user
     * @param  \App\Dokan  $dokan
     * @return mixed
     */
    public function forceDelete(User $user, Dokan $dokan)
    {
        //
    }
}
