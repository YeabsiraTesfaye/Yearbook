<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Yearbook;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;


class YearbookPolicy
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
     * @param  \App\Models\Yearbook  $yearbook
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Yearbook $yearbook)
    {
        $user_ids = DB::table('user_yearbook')->where('yearbook_id',$yearbook->id)->pluck('user_id');
        return $user->id == $yearbook->user_id || $user_ids->contains($user->id);
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
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function createPost(User $user, Yearbook $yearbook)
    {
        $user_ids = DB::table('user_yearbook')->where('yearbook_id',$yearbook->id)->pluck('user_id');
        return $user_ids->contains($user->id);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Yearbook  $yearbook
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Yearbook $yearbook)
    {
        return $user->id == $yearbook->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Yearbook  $yearbook
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Yearbook $yearbook)
    {
        return $user->id == $yearbook->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Yearbook  $yearbook
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Yearbook $yearbook)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Yearbook  $yearbook
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Yearbook $yearbook)
    {
        //
    }

    /**
     * Determine whether the user can add group photos.
     *
     * @param  \App\Models\Yearbook  $yearbook
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function addGroupPhoto(User $user, Yearbook $yearbook)
    {
        $role = DB::table('user_yearbook')->where('user_id',$user->id)->where('yearbook_id',$yearbook->id)->first();
        return $role->role == 1 || $yearbook->user_id == $user->id;
    }
}
