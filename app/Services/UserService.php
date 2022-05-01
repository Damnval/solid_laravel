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
     * Undocumented function
     *
     * @param Request $data
     * @return User
     */
	public function storeUser($data): User
	{
        $user = $this->userRepository->create($data);
        $this->userRepository->saveUserAddress($user);

        return $user;
	}

}
