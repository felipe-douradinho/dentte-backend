<?php

namespace Modules\Patient\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Patient\Entities\PatientPlan;
use Modules\Patient\Repositories\PatientPlanRepositoryInterface;


class PatientPlanRepository extends BaseRepository implements PatientPlanRepositoryInterface
{

    /**
     * PatientPlanRepository constructor.
     *
     * @param PatientPlan $model
     */
    public function __construct(PatientPlan $model)
    {
        $this->model = $model;
    }

}
