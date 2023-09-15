<?php

namespace Modules\Pipeline\Services;

use Modules\Pipeline\Transformers\CardEventCollection;
use Modules\Pipeline\Transformers\CardEventResource;
use Modules\Core\Services\BaseService;
use Modules\Pipeline\Repositories\CardEventRepositoryInterface;

class CardEventService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = CardEventCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = CardEventResource::class;

    /**
     * @param CardEventRepositoryInterface $repository
     */
    public function __construct(CardEventRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    //public function getDefaultFilters() : array
    //{
    //    return [ 'company_id' => auth()->user()->company_id ];
    //}
}
