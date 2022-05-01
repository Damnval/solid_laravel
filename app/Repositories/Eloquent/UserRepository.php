<?php

namespace App\Repositories\Eloquent;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use  App\Repositories\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{

    /**
     * Bind model in constructor
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        // Initialize the Base repository
        parent::__construct($user);
    }

    /**
     * Will return all records of Users
     *
     * @return Collection
     */
	public function getAllUser()
    {
        return $this->getAllRecords();
    }

    /**
     * Will return all records of Users
     *
     * @return Model
     */
	public function storeUser(array $attribute): User
    {
        $user = $this->create($attribute);

        return $user;
    }

    public function saveUserAddress(User $user, $data)
    {
        $data_address = new Address();
        $data_address->fill($data['address']);

        $user->address()->save($data_address);
    }

    // /**
    //  * Will Specific User
    //  *
    //  * @return Model
    //  */
	// public function show($id): Model 
    // {
    //     return $this->model->findOrFail($id);
    // }
  

}