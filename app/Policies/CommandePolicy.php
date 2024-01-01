<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Commande;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommandePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the commande can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the commande can view the model.
     */
    public function view(User $user, Commande $model): bool
    {
        return true;
    }

    /**
     * Determine whether the commande can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the commande can update the model.
     */
    public function update(User $user, Commande $model): bool
    {
        return true;
    }

    /**
     * Determine whether the commande can delete the model.
     */
    public function delete(User $user, Commande $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the commande can restore the model.
     */
    public function restore(User $user, Commande $model): bool
    {
        return false;
    }

    /**
     * Determine whether the commande can permanently delete the model.
     */
    public function forceDelete(User $user, Commande $model): bool
    {
        return false;
    }
}
