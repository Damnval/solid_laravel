<?php 

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EloquentRepositoryInterface
{
    /**
    // * @return Collection
    */
	public function getAllRecords();

    /**
     * @param array $attributes
     * @return Model
    */
    public function create(array $attributes): Model;

    /**
     * @param $id
     * @return Model
     */
    public function show($id): ?Model;

    // /**
    // * @param array $attributes
    // * @param $id
    // * @return Model
    // */
    // public function update(array $attributes, $id): ?Model;

    // /**
    // * @param $id
    // * @return Boolean
    // */
    // public function destroy($id);

}
