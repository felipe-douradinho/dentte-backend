<?php

namespace Modules\Expense\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Expense\Entities\Expense;
use Modules\Expense\Http\Requests\ExpenseStoreRequest;
use Modules\Expense\Http\Requests\ExpenseUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Expense\Services\ExpenseService;


class ExpenseController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = ExpenseStoreRequest::class;
    protected string $update_request_class  = ExpenseUpdateRequest::class;


    /**
     * @param ExpenseService $service
     */
    public function __construct( ExpenseService $service )
    {
        $this->authorizeResource(Expense::class);
        $this->service = $service;
    }
}
