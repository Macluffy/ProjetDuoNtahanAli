<?php

namespace App\Policies;

use App\Models\Aboutbtn;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutbtnPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Aboutbtn $aboutbtn)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Aboutbtn $aboutbtn)
    {
        return in_array($user->role_id,[1,2]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Aboutbtn $aboutbtn)
    {
        return in_array($user->role_id,[1,2]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Aboutbtn $aboutbtn)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Aboutbtn $aboutbtn)
    {
        //
    }
}
