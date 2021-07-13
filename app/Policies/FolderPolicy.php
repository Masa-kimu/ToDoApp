<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Folder;
use Illuminate\Auth\Access\HandlesAuthorization;

class FolderPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return 
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, Folder $folder){
        return $user->id === $folder->user_id;
    }
}
