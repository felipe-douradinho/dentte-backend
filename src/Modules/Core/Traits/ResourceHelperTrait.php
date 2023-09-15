<?php

namespace Modules\Core\Traits;

use Modules\Core\Transformers\BaseResource;
use Modules\Core\Transformers\BaseResourceCollection;

trait ResourceHelperTrait
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection;

    /**
     * @var string $resource
     */
    public string $resource;

    /**
     * @return string
     */
    public function getResourceClass(): string
    {
        return $this->resource;
    }

    /**
     * @return string
     */
    public function getResourceCollectionClass() : string
    {
        return $this->resource_collection;
    }

    /**
     * @param $collection
     * @return BaseResourceCollection
     */
    public function getResourceCollection($collection)
    {
        $resource_collection_class = $this->getResourceCollectionClass();

        return new $resource_collection_class($collection);
    }

    /**
     * @param $resource
     * @return BaseResource
     */
    public function getResource($resource)
    {
        $resource_class = $this->getResourceClass();

        return new $resource_class($resource);
    }

}
