<?php

namespace Modules\Expense\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Expense\Entities\ExpenseCategory;
use Modules\Expense\Http\Requests\ExpenseCategoryStoreRequest;
use Modules\Expense\Http\Requests\ExpenseCategoryUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Expense\Services\ExpenseCategoryService;


class ExpenseCategoryController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = ExpenseCategoryStoreRequest::class;
    protected string $update_request_class  = ExpenseCategoryUpdateRequest::class;


    /**
     * @param ExpenseCategoryService $service
     */
    public function __construct( ExpenseCategoryService $service )
    {
        $this->authorizeResource(ExpenseCategory::class);
        $this->service = $service;
    }
}
