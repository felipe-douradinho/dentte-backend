<?php

namespace Modules\Patient\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Patient\Entities\PatientSponsor;
use Modules\Patient\Repositories\PatientSponsorRepositoryInterface;


class PatientSponsorRepository extends BaseRepository implements PatientSponsorRepositoryInterface
{

    /**
     * PatientSponsor constructor.
     *
     * @param PatientSponsor $model
     */
    public function __construct(PatientSponsor $model)
    {
        $this->model = $model;
    }

}
