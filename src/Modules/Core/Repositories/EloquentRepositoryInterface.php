<?php

namespace Modules\Core\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Interface EloquentRepositoryInterface
 *
 * @package Modules\Core\Repositories
 */
interface EloquentRepositoryInterface
{
    /**
     * @param int $limit
     * @return Collection
     */
    public function all( int $limit = 20 ): Collection;

    /**
     * @param array $filters
     * @param int $limit
     * @return Collection
     */
    public function allFiltered( array $filters = [ ], int $limit = 20 ): Collection;

    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function paginate( int $perPage ) : LengthAwarePaginator;

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes = [ ]): Model;

    /**
     * @param Model $resource
     * @param array $attributes
     *
     * @return bool
     */
    public function update(Model $resource, array $attributes = [ ]): bool;

    /**
     * @param array $attributes
     * @param array $criterias
     *
     * @return Model
     */
    public function updateOrCreate(array $attributes = [ ], array $criterias = [ ]): Model;

    /**
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model;

    /**
     * @param array $criterias
     * @param array $columns
     * @return Collection
     */
    public function get(array $columns = [ ], array $criterias = [], ): Collection;

    /**
     * @param array $criterias
     * @param array $columns
     * @return Model|null
     */
    public function firstWhere(array $criterias = [], array $columns = ['*']): ?Model;

    /**
     * @param int $id
     * @return Model|null
     */
    public function findOrFail(int $id): ?Model;

    /**
     * @param int|Model $resource_or_id
     * @return int
     */
    public function destroy(int|Model $resource_or_id) : int;
}
