<?php

namespace Modules\Core\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Core\Repositories\EloquentRepositoryInterface;
use Modules\Core\Traits\ResourceHelperTrait;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;


class BaseService
{
    use ResourceHelperTrait;

    /**
     * @var EloquentRepositoryInterface $repository
     */
    public EloquentRepositoryInterface $repository;


    /**
     * @param EloquentRepositoryInterface $repository
     */
    public function __construct(EloquentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $limit
     * @return Collection
     */
    public function all( int $limit = 20 ): Collection
    {
        return $this->repository->all( $limit );
    }

    /**
     * @param array|null $filters
     * @param int $limit
     * @return Collection
     */
    public function allFiltered( ?array $filters = null, int $limit = 20 ): Collection
    {
        if( !$filters ) {
            $filters = $this->getDefaultFilters();
        }

        return $this->repository->allFiltered( $filters, $limit );
    }

    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function paginate( int $perPage ) : LengthAwarePaginator
    {
        return $this->repository->paginate($perPage);
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function find(int $id) : ?Model
    {
        return $this->repository->find($id);
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function findOrFail(int $id) : ?Model
    {
        if ( !($resource = $this->repository->find($id)) ) {
            throw new ResourceNotFoundException('Resource Not Found', 404);
        }

        return $resource;
    }

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data) : Model
    {
        return $this->repository->create($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data = [ ]) : bool
    {
        if ( !($resource = $this->repository->find($id)) ) {
            throw new ResourceNotFoundException('Resource Not Found', 404);
        }

        return $this->repository->update($resource, $data);
    }

    /**
     * @param array $data
     * @param array $criterias
     * @return bool
     */
    public function updateByCriteria(array $data = [ ], array $criterias = [ ]) : bool
    {
        if( !($resource = $this->repository->firstWhere($criterias)) ) {
            throw new ResourceNotFoundException('Resource Not Found', 404);
        }

        return $this->repository->update($resource, $data);
    }

    /**
     * @param int|Model $resource_or_id
     * @return int
     */
    public function destroy(int|Model $resource_or_id) : int
    {
        if ( $resource_or_id instanceof Model ) {
            return $this->repository->destroy( $resource_or_id );
        }

        if ( !($resource = $this->repository->find( $resource_or_id )) ) {
            throw new ResourceNotFoundException('Resource Not Found', 404);
        }

        return $this->repository->destroy( $resource );
    }

    /**
     * @return array
     */
    public function getDefaultFilters() : array
    {
        return [ ];
    }
}
