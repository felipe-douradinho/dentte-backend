<?php

namespace Modules\Base\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Core\Services\BaseService;


class BaseController extends JsonController
{
    /**
     * @param BaseService $service
     */
    public function __construct( BaseService $service )
    {
        $this->service = $service;
    }

}
