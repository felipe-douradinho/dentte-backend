<?php

namespace Modules\Patient\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Patient\Entities\PatientDocument;
use Modules\Patient\Repositories\PatientDocumentRepositoryInterface;


class PatientDocumentRepository extends BaseRepository implements PatientDocumentRepositoryInterface
{

    /**
     * PatientDocument constructor.
     *
     * @param PatientDocument $model
     */
    public function __construct(PatientDocument $model)
    {
        $this->model = $model;
    }

}
