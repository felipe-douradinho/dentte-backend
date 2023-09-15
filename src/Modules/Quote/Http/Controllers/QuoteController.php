<?php

namespace Modules\Quote\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Quote\Entities\Quote;
use Modules\Quote\Http\Requests\QuoteStoreRequest;
use Modules\Quote\Http\Requests\QuoteUpdateRequest;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Quote\Services\QuoteService;


class QuoteController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = QuoteStoreRequest::class;
    protected string $update_request_class  = QuoteUpdateRequest::class;


    /**
     * @param QuoteService $service
     */
    public function __construct( QuoteService $service )
    {
        $this->authorizeResource(Quote::class);
        $this->service = $service;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return JsonResponse
     */
    public function store() : JsonResponse
    {
        $this->makeStoreRequest();

        $quote = $this->service->create( $this->store_request->toArray() );

        $this->service->createQuoteItems($quote, $this->store_request->quote_items);

        $resource_collection = $this->service->getResource( $quote );

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

        $result = $this->service->update($id, $this->update_request->toArray());

        $this->service->updateQuoteItems($resource, $this->update_request->quote_items);

        $message = $result ? "Resource #$id successfully updated." : "Nothing updated.";

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

        $quote = $this->service->repository->firstWhere([ 'id' => $id ], [ 'id', ]);

        if( !$quote ) {
            return $this->notFoundResponse();
        }

        $this->service->destroyQuoteItems($quote);

        $count = $this->service->destroy($id);

        return $this->successResponse(compact('count'), "Resource #$id successfully deleted.");
    }
}
