<?php

namespace Modules\Patient\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Patient\Entities\PatientAddress;
use Modules\Patient\Repositories\PatientAddressRepositoryInterface;


class PatientAddressRepository extends BaseRepository implements PatientAddressRepositoryInterface
{

    /**
     * PatientAddressRepository constructor.
     *
     * @param PatientAddress $model
     */
    public function __construct(PatientAddress $model)
    {
        $this->model = $model;
    }

}
