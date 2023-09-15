<?php

namespace Modules\Pipeline\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Pipeline\Entities\Stage;
use Modules\Pipeline\Http\Requests\StageStoreRequest;
use Modules\Pipeline\Http\Requests\StageUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Pipeline\Services\StageService;


class StageController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = StageStoreRequest::class;
    protected string $update_request_class  = StageUpdateRequest::class;


    /**
     * @param StageService $service
     */
    public function __construct( StageService $service )
    {
        $this->authorizeResource(Stage::class);
        $this->service = $service;
    }
}
