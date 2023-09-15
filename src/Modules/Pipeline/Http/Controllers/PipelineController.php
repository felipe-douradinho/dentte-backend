<?php

namespace Modules\Pipeline\Http\Controllers;

use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Pipeline\Entities\Pipeline;
use Modules\Pipeline\Http\Requests\PipelineStoreRequest;
use Modules\Pipeline\Http\Requests\PipelineUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Pipeline\Services\PipelineService;


class PipelineController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = PipelineStoreRequest::class;
    protected string $update_request_class  = PipelineUpdateRequest::class;


    /**
     * @param PipelineService $service
     */
    public function __construct( PipelineService $service )
    {
        $this->authorizeResource(Pipeline::class);
        $this->service = $service;
    }
}
