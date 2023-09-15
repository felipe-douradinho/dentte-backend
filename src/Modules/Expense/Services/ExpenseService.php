<?php

namespace Modules\Expense\Services;

use Modules\Expense\Transformers\ExpenseResource;
use Modules\Core\Services\BaseService;
use Modules\Expense\Repositories\ExpenseRepositoryInterface;
use Modules\Expense\Transformers\ExpenseResourceCollection;

class ExpenseService extends BaseService
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection = ExpenseResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = ExpenseResource::class;

    /**
     * @param ExpenseRepositoryInterface $repository
     */
    public function __construct(ExpenseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
