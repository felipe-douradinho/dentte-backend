<?php

namespace Modules\Patient\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Patient\Entities\Patient;
use Modules\Patient\Repositories\PatientRepositoryInterface;


class PatientRepository extends BaseRepository implements PatientRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Patient $model
     */
    public function __construct(Patient $model)
    {
        $this->model = $model;
    }

}
