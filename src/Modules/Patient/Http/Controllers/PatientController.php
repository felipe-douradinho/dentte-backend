<?php

namespace Modules\Patient\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Core\Traits\CustomAuthorizesRequests;
use Modules\Patient\Entities\Patient;
use Modules\Patient\Services\PatientService;
use Modules\Core\Http\Controllers\JsonController;
use Modules\Patient\Http\Requests\PatientStoreRequest;
use Modules\Patient\Http\Requests\PatientUpdateRequest;


class PatientController extends JsonController
{
    use CustomAuthorizesRequests;

    protected string $store_request_class   = PatientStoreRequest::class;
    protected string $update_request_class  = PatientUpdateRequest::class;


    /**
     * @param PatientService $service
     */
    public function __construct( PatientService $service )
    {
        $this->authorizeResource(Patient::class);
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

        $patient = $this->service->create( $this->store_request->toArray() );

        $this->service->createPatientDocuments($patient, $this->store_request->patient_documents);
        $this->service->createPatientPhones($patient, ($this->store_request->patient_phones ?? []) );
        $this->service->createPatientSponsor($patient, ($this->store_request->patient_sponsor ?? []) );
        $this->service->createPatientAddress($patient, ($this->store_request->patient_address ?? []) );
        $this->service->createPatientPlan($patient, ($this->store_request->patient_plan ?? []) );

        $resource_collection = $this->service->getResource( $patient );

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

        $this->service->updatePatientDocuments($resource, $this->update_request->patient_documents);
        $this->service->updatePatientPhones($resource, $this->update_request->patient_phones);
        $this->service->updatePatientSponsor($resource, $this->update_request->patient_sponsor);
        $this->service->updatePatientAddress($resource, $this->update_request->patient_address);
        $this->service->updatePatientPlan($resource, $this->update_request->patient_plan);

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

        $patient = $this->service->repository->firstWhere([ 'id' => $id ], [ 'id', ]);

        if( !$patient ) {
            return $this->notFoundResponse();
        }

        $this->service->destroyPatientDocuments($patient);
        $this->service->destroyPatientPhones($patient);
        $this->service->destroyPatientSponsor($patient);
        $this->service->destroyPatientAddress($patient);
        $this->service->destroyPatientPlan($patient);

        $count = $this->service->destroy($id);

        return $this->successResponse(compact('count'), "Resource #$id successfully deleted.");
    }

}
