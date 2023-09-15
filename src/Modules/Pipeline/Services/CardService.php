<?php

namespace Modules\Pipeline\Services;

use Modules\Pipeline\Transformers\CardCollection;
use Modules\Pipeline\Transformers\CardResource;
use Modules\Core\Services\BaseService;
use Modules\Pipeline\Repositories\CardRepositoryInterface;

class CardService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = CardCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = CardResource::class;

    /**
     * @param CardRepositoryInterface $repository
     */
    public function __construct(CardRepositoryInterface $repository)
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
