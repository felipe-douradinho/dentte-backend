<?php

namespace Modules\Quote\Services;

use Modules\Quote\Transformers\QuoteItemCollection;
use Modules\Quote\Transformers\QuoteItemResource;
use Modules\Core\Services\BaseService;
use Modules\Quote\Repositories\QuoteItemRepositoryInterface;

class QuoteItemService extends BaseService
{

    /**
     * @var string $resource_collection
     */
    public string $resource_collection = QuoteItemCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = QuoteItemResource::class;

    /**
     * @param QuoteItemRepositoryInterface $repository
     */
    public function __construct(QuoteItemRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
