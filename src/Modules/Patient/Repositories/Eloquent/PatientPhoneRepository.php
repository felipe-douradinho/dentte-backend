<?php

namespace Modules\Patient\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Patient\Entities\PatientPhone;
use Modules\Patient\Repositories\PatientPhoneRepositoryInterface;


class PatientPhoneRepository extends BaseRepository implements PatientPhoneRepositoryInterface
{

    /**
     * PatientPhone constructor.
     *
     * @param PatientPhone $model
     */
    public function __construct(PatientPhone $model)
    {
        $this->model = $model;
    }

}
