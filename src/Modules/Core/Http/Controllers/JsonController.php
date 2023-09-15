<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Services\BaseService;
use Modules\Core\Traits\RequestTrait;
use Modules\Core\Traits\ResponseTrait;


class JsonController extends Controller
{
    use ResponseTrait, RequestTrait;

    /**
     * @var BaseService $service
     */
    protected BaseService $service;


    /**
     * @param BaseService $service
     */
    public function __construct( BaseService $service )
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request) : JsonResponse
    {
        $resource_collection = $this->service->getResourceCollection(
            $this->service->allFiltered()
        );

        return $this->successResponse(
            $resource_collection
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return JsonResponse
     */
    public function store() : JsonResponse
    {
        $this->makeStoreRequest();

        $resource = $this->service->create( $this->store_request->toArray() );

        $resource_collection = $this->service->getResource( $resource );

        return $this->successResponse(
            $resource_collection
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id) : JsonResponse
    {
        $this->makeShowRequest();

        $resource = $this->service->find( $id );

        if( !$resource ) {
            return $this->notFoundResponse();
        }

        $resource_collection = $this->service->getResource( $resource );

        return $this->successResponse(
            $resource_collection
        );
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function update(int $id) : JsonResponse
    {
        $this->makeUpdateRequest();

        $resource = $this->service->repository->firstWhere([ 'id' => $id ], [ 'id', ]);

        if( !$resource ) {
            return $this->notFoundResponse();
        }

        $message = $this->service->update($id, $this->update_request->toArray()) ?
            "Resource #$id successfully updated." : "Nothing updated.";

        return $this->successResponse([], $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id) : JsonResponse
    {
        $this->makeDestroyRequest();

        $resource = $this->service->repository->firstWhere([ 'id' => $id ], [ 'id', ]);

        if( !$resource ) {
            return $this->notFoundResponse();
        }

        $count = $this->service->destroy($id);

        return $this->successResponse(compact('count'), "Resource #$id successfully deleted.");
    }

}
