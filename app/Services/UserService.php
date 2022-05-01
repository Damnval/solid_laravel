<?php

namespace App\Services;

// use App\Models\Address;
// use App\Models\User;
// use App\Repositories\Eloquent\BaseRepository;

use App\Models\User;
use App\Repositories\Eloquent\UserRepository;

class UserService
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // public function index()
    // {
    //     return $this->userRepository->getAllUser();

    // }

    /**
     * Undocumented f
     *
     * @param Request $data
     * @return User
     */
    public function storeUser($data): User
    {
        $user = $this->userRepository->create($data);
        // Address is not an entity. It depends on User model
        $this->userRepository->saveUserAddress($user);

        return $user;
    }
}
