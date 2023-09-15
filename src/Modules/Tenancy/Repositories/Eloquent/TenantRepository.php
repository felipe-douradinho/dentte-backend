<?php

namespace Modules\Tenancy\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Tenancy\Entities\Tenant;
use Modules\Tenancy\Repositories\TenantRepositoryInterface;


class TenantRepository extends BaseRepository implements TenantRepositoryInterface
{

    /**
     * TenancyRepository constructor.
     *
     * @param Tenant $model
     */
    public function __construct(Tenant $model)
    {
        $this->model = $model;
    }

}
