<?php

namespace Modules\Expense\Services;

use Modules\Expense\Transformers\ExpenseCategoryCollection;
use Modules\Expense\Transformers\ExpenseCategoryResource;
use Modules\Core\Services\BaseService;
use Modules\Expense\Repositories\ExpenseCategoryRepositoryInterface;

class ExpenseCategoryService extends BaseService
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection = ExpenseCategoryCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = ExpenseCategoryResource::class;

    /**
     * @param ExpenseCategoryRepositoryInterface $repository
     */
    public function __construct(ExpenseCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
