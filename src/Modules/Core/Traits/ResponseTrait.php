<?php

namespace Modules\Core\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;


trait ResponseTrait
{
    /**
     * @param ResourceCollection|JsonResource|array $data
     * @param string|null $message
     * @param int $http_status
     * @param array $headers
     * @return JsonResponse
     */
    public function successResponse(
        ResourceCollection|JsonResource|array $data,
        ?string $message = null,
        int $http_status = 200,
        array $headers = [ ]) : JsonResponse
    {
        if( $data instanceof ResourceCollection ) {
            return $this->getResponse($data, $http_status, $headers);
        }

        return $this->getResponse([
            'message'   => $message,
            'data'      => $data,
        ], $http_status, $headers);
    }

    public function notFoundResponse(string|array $message = 'Resource not found', array $headers = [ ]) : JsonResponse
    {
        return $this->errorResponse($message, 404, $headers);
    }

    public function errorResponse(string|array $message, int $http_status = 500, array $headers = [ ]) : JsonResponse
    {
        return $this->getResponse([
            'error' => $message,
        ], $http_status, $headers);
    }

    private function getResponse(ResourceCollection|array $response, int $http_status = 200, array $headers = [ ]) : JsonResponse
    {
        if( $response instanceof ResourceCollection ) {
            return $response->response()->setStatusCode($http_status)->withHeaders($headers);
        }

        return response()->json([
            ...$response,
            // -- other fields
        ], $http_status, $headers);
    }
}
