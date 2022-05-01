<?php
// This is the default design for eloqient repository
// BaseRepository is a common class that can be called by any model

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

//  implements EloquentRepositoryInterface

class BaseRepository implements EloquentRepositoryInterface
{
    // model property on class instances
    protected $model;

    /**
     * Constructor to bind model to repo
     * 
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all resource of a Model
     * @return collection 
     */
    public function getAllRecords()
    {
	    return $this->model->all();
    }

     /**
     * Saving Attributes of a Model to resource
     * 
     * @param array $attributes
     * @return Model Newly saved Model resource
     */
    public function create(array $attributes): Model
    {
        $this->model->fill($data);
        $this->model->save();
        return $this->model;
    }

    /**
     * Deleting of {singular_var} in {resource_var} resource
     * 
     * @param int $id
     * @return Model 
     */
    public function show($id): Model
    {
        return $this->model->findOrFail($id);
    }

    // /**
    //  * Dynamic getting {plural_var} with where params
    //  * @param array $data Params to search
    //  * @param array $with Relationships to return
    //  * @param int $paginate No. of pagination per page
    //  * @return collection {resource_var} resource
    //  */
    // public function where(array $data, array $with = [], $paginate = null)
    // {
    //     $query = $this->model
    //                 ->where($data);

    //     if (count($with) > 0) {
    //         $query = $query->with($with);
    //     }

    //     if ($paginate) {
    //         $query = $this->addPaginate($query, $paginate);
    //         return $query;
    //     }

    //     return $query->get();
    // }

   
    // /**
    //  * Updating of {singular_var} in {resource_var} resource
    //  * @param array $data
    //  * @return Boolean $updated_model {singular_var}
    //  */
    // public function update(array $data, $id)
    // {
    //     $model = $this->model->find($id);
    //     $updated_model = $model->update($data);
    //     return $updated_model;
    // }

    // /**
    //  * Deleting of {singular_var} in {resource_var} resource
    //  * @param int $id
    //  * @return Boolean Is {singular_var} deleted
    //  */
    // public function destroy($id)
    // {
    //     return $this->model->destroy($id);
    // }



    // /**
    //  * Get Last table ID
    //  *
    //  * @return int ID of table
    //  */
    // public function lastId()
    // {
    //     $id = $this->model->latest('id')->first();
    //     return $id ? $id->pluck('id')[0] : 0;
    // }

}
