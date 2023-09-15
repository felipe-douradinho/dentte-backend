<?php

namespace Modules\Core\Traits;

use Illuminate\Http\JsonResponse;

trait CheckIsDefaultTrait
{
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id) : JsonResponse
    {
        $this->makeDestroyRequest();

        $resource = $this->service->repository->firstWhere([ 'id' => $id ], [ 'id', 'is_default', ]);

        if( !$resource ) {
            return $this->notFoundResponse();
        }

        if( $resource->is_default === \Modules\Core\Enums\YesNoEnum::YES->value ) {
            return $this->errorResponse(
                "You can't delete a default resource.", 400
            );
        }

        $count = $this->service->destroy($id);

        return $this->successResponse(compact('count'), "Resource #$id successfully deleted.");
    }
}
