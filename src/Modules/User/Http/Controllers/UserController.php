<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\UserStoreRequest;
use Modules\User\Http\Requests\UserUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\User\Services\UserService;


class UserController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = UserStoreRequest::class;
    protected string $update_request_class  = UserUpdateRequest::class;


    /**
     * @param UserService $service
     */
    public function __construct( UserService $service )
    {
        $this->authorizeResource(User::class);
        $this->service = $service;
    }

    /**
     * Show the specified resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function showMe(Request $request): JsonResponse
    {
        return $this->show( $request->user()->id );
    }
}
