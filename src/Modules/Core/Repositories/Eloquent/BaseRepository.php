<?php

namespace Modules\Core\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Core\Repositories\EloquentRepositoryInterface;


class BaseRepository implements EloquentRepositoryInterface
{

    /**
     * @var Model $model
     */
    protected Model $model;


    /**
     * @param int $limit
     * @return Collection
     */
    public function all( int $limit = 20 ): Collection
    {
        return $this->model::limit($limit)->get();
    }

    /**
     * @param array $filters
     * @param int $limit
     * @return Collection
     */
    public function allFiltered( array $filters = [ ], int $limit = 20 ): Collection
    {
        if( !method_exists($this->model, 'modelFilter') ) {
            return $this->all( $limit );
        }

        return $this->model::filter( $filters )->limit($limit)->get();
    }

    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function paginate( int $perPage ) : LengthAwarePaginator
    {
        return $this->model->paginate( $perPage );
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes = [ ]): Model
    {
        return $this->model::create($attributes);
    }

    /**
     * @param Model $resource
     * @param array $attributes
     *
     * @return bool
     */
    public function update(Model $resource, array $attributes = [ ]): bool
    {
        return $resource->update($attributes);
    }

    /**
     * @param array $attributes
     * @param array $criterias
     *
     * @return Model
     */
    public function updateOrCreate(array $attributes = [ ], array $criterias = [ ]): Model
    {
        return $this->model::updateOrCreate($criterias, $attributes);
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model
    {
        return $this->model::find($id);
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function findOrFail(int $id): ?Model
    {
        return $this->model::findOrFail($id);
    }

    /**
     * @param array $columns
     * @param array $criterias
     * @return Collection
     */
    public function get(array $columns = [ ], array $criterias = [], ): Collection
    {
        if( !empty($criterias) ) {
            return $this->model::where($criterias)->get($columns);
        }

        return $this->model::get($columns);
    }

    /**
     * @param array $criterias
     * @param array $columns
     * @return Model|null
     */
    public function firstWhere(array $criterias = [], array $columns = ['*']): ?Model
    {
        return $this->model::where($criterias)->first( $columns );
    }

    /**
     * @param int|Model $resource_or_id
     * @return int
     */
    public function destroy(int|Model $resource_or_id) : int
    {
        if( $resource_or_id instanceof Model ) {
            return $resource_or_id->delete();
        }

        return $this->model::destroy($resource_or_id);
    }

}
