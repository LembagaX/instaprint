<?php

namespace App\Policies;

use App\Rating;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RatingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any ratings.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isSupervisor() or $user->isManager();
    }

    /**
     * Determine whether the user can view the rating.
     *
     * @param  \App\User  $user
     * @param  \App\Rating  $rating
     * @return mixed
     */
    public function view(User $user, Rating $rating)
    {
        return $user->isSupervisor();
    }

    /**
     * Determine whether the user can create ratings.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the rating.
     *
     * @param  \App\User  $user
     * @param  \App\Rating  $rating
     * @return mixed
     */
    public function update(User $user, Rating $rating)
    {
        //
    }

    /**
     * Determine whether the user can delete the rating.
     *
     * @param  \App\User  $user
     * @param  \App\Rating  $rating
     * @return mixed
     */
    public function delete(User $user, Rating $rating)
    {
        //
    }

    /**
     * Determine whether the user can restore the rating.
     *
     * @param  \App\User  $user
     * @param  \App\Rating  $rating
     * @return mixed
     */
    public function restore(User $user, Rating $rating)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the rating.
     *
     * @param  \App\User  $user
     * @param  \App\Rating  $rating
     * @return mixed
     */
    public function forceDelete(User $user, Rating $rating)
    {
        //
    }
}
