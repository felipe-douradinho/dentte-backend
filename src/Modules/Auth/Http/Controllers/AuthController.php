<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Auth\Services\AuthService;


class AuthController extends JsonController
{
    /**
     * @param AuthService $service
     */
    public function __construct( AuthService $service )
    {
        $this->service = $service;
    }

}
