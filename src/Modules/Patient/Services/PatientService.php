<?php

namespace Modules\Patient\Services;

use Illuminate\Database\Eloquent\Model;
use Modules\Base\Transformers\BaseResource;
use Modules\Core\Services\BaseService;
use Modules\Core\Transformers\BaseResourceCollection;
use Modules\Patient\Entities\Patient;
use Modules\Patient\Repositories\PatientAddressRepositoryInterface;
use Modules\Patient\Repositories\PatientDocumentRepositoryInterface;
use Modules\Patient\Repositories\PatientPhoneRepositoryInterface;
use Modules\Patient\Repositories\PatientPlanRepositoryInterface;
use Modules\Patient\Repositories\PatientRepositoryInterface;
use Modules\Patient\Repositories\PatientSponsorRepositoryInterface;
use Modules\Patient\Transformers\PatientResource;
use Modules\Patient\Transformers\PatientResourceCollection;

class PatientService extends BaseService
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection = PatientResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = PatientResource::class;

    /**
     * @param PatientRepositoryInterface $repository
     * @param PatientDocumentRepositoryInterface $patient_document_repository
     * @param PatientPhoneRepositoryInterface $patient_phone_repository
     * @param PatientSponsorRepositoryInterface $patient_sponsor_repository
     * @param PatientAddressRepositoryInterface $patient_address_repository
     * @param PatientPlanRepositoryInterface $patient_plan_repository
     */
    public function __construct(
        PatientRepositoryInterface $repository,
        public PatientDocumentRepositoryInterface $patient_document_repository,
        public PatientPhoneRepositoryInterface $patient_phone_repository,
        public PatientSponsorRepositoryInterface $patient_sponsor_repository,
        public PatientAddressRepositoryInterface $patient_address_repository,
        public PatientPlanRepositoryInterface $patient_plan_repository
    ) {
        $this->repository = $repository;
    }

    /**
     * @param Patient|Model $patient
     * @param array $documents
     * @return void
     */
    public function createPatientDocuments(Patient|Model $patient, array $documents): void
    {
        foreach ($documents as $document)
        {
            $this->patient_document_repository->create([
                'patient_id' => $patient->id,
                ...$document
            ]);
        }
    }

    /**
     * @param Patient|Model $patient
     * @param array $phones
     * @return void
     */
    public function createPatientPhones(Patient|Model $patient, array $phones = [ ]): void
    {
        foreach ($phones as $phone)
        {
            $this->patient_phone_repository->create([
                'patient_id' => $patient->id,
                ...$phone
            ]);
        }
    }

    /**
     * @param Patient|Model $patient
     * @param array $sponsor
     * @return void
     */
    public function createPatientSponsor(Patient|Model $patient, array $sponsor = [ ]): void
    {
        $this->patient_sponsor_repository->create([
            'patient_id' => $patient->id,
            ...$sponsor
        ]);
    }

    /**
     * @param Patient|Model $patient
     * @param array $address
     * @return void
     */
    public function createPatientAddress(Patient|Model $patient, array $address = [ ]): void
    {
        $this->patient_address_repository->create([
            'patient_id' => $patient->id,
            ...$address
        ]);
    }

    /**
     * @param Patient|Model $patient
     * @param array $plan
     * @return void
     */
    public function createPatientPlan(Patient|Model $patient, array $plan = [ ]): void
    {
        $this->patient_plan_repository->create([
            'patient_id'    => $patient->id,
            ...$plan
        ]);
    }

    /**
     * @param Patient|Model $patient
     * @param array $documents
     * @return void
     */
    public function updatePatientDocuments(Patient|Model $patient, array $documents): void
    {
        $this->destroyPatientDocuments( $patient );
        $this->createPatientDocuments( $patient, $documents );
    }

    /**
     * @param Patient|Model $patient
     * @param array $phones
     * @return void
     */
    public function updatePatientPhones(Patient|Model $patient, array $phones): void
    {
        $this->destroyPatientPhones( $patient );
        $this->createPatientPhones( $patient, $phones );
    }

    /**
     * @param Patient|Model $patient
     * @param array $sponsor
     * @return void
     */
    public function updatePatientSponsor(Patient|Model $patient, array $sponsor): void
    {
        $this->destroyPatientSponsor( $patient );
        $this->createPatientSponsor( $patient, $sponsor );
    }

    /**
     * @param Patient|Model $patient
     * @param array $sponsor
     * @return void
     */
    public function updatePatientAddress(Patient|Model $patient, array $sponsor): void
    {
        $this->destroyPatientAddress( $patient );
        $this->createPatientAddress( $patient, $sponsor );
    }

    /**
     * @param Patient|Model $patient
     * @param array $plan
     * @return void
     */
    public function updatePatientPlan(Patient|Model $patient, array $plan): void
    {
        $patient->plan()->syncWithPivotValues([ $plan['plan_id'] ], $plan);
    }

    /**
     * @param Patient|Model $patient
     * @return void
     */
    public function destroyPatientDocuments(Patient|Model $patient): void
    {
        $patient->documents()->delete();
    }

    /**
     * @param Patient|Model $patient
     * @return void
     */
    public function destroyPatientPhones(Patient|Model $patient): void
    {
        $patient->phones()->delete();
    }

    /**
     * @param Patient|Model $patient
     * @return void
     */
    public function destroyPatientSponsor(Patient|Model $patient): void
    {
        $patient->sponsor()->delete();
    }

    /**
     * @param Patient|Model $patient
     * @return void
     */
    public function destroyPatientAddress(Patient|Model $patient): void
    {
        $patient->address()->delete();
    }

    /**
     * @param Patient|Model $patient
     * @return void
     */
    public function destroyPatientPlan(Patient|Model $patient): void
    {
        $patient->plan()->delete();
    }

    /**
     * @param $collection
     * @return BaseResourceCollection
     */
    public function getResourceCollection($collection)
    {
        $resource_collection_class = $this->getResourceCollectionClass();

        $collection->load([
            'documents',
            'phones',
            'sponsor',
            'address',
        ]);

        return new $resource_collection_class($collection);
    }

    /**
     * @param Patient $patient
     * @return BaseResource
     */
    public function getResource($patient)
    {
        $resource_class = $this->getResourceClass();

        $patient->load([
            'documents',
            'phones',
            'sponsor',
            'address',
        ]);

        return new $resource_class($patient);
    }
}
