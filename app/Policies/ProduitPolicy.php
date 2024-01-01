<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProduitPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the produit can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the produit can view the model.
     */
    public function view(User $user, Produit $model): bool
    {
        return true;
    }

    /**
     * Determine whether the produit can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the produit can update the model.
     */
    public function update(User $user, Produit $model): bool
    {
        return true;
    }

    /**
     * Determine whether the produit can delete the model.
     */
    public function delete(User $user, Produit $model): bool
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
     * Determine whether the produit can restore the model.
     */
    public function restore(User $user, Produit $model): bool
    {
        return false;
    }

    /**
     * Determine whether the produit can permanently delete the model.
     */
    public function forceDelete(User $user, Produit $model): bool
    {
        return false;
    }
}
