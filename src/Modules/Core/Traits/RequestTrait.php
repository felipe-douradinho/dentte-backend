<?php

namespace Modules\Core\Traits;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Modules\Core\Http\Requests\BaseDestroyRequest;
use Modules\Core\Http\Requests\BaseShowRequest;
use Modules\Core\Http\Requests\BaseStoreRequest;
use Modules\Core\Http\Requests\BaseUpdateRequest;


trait RequestTrait
{
    /**
     * @var string $store_request_class
     */
    protected string $store_request_class       = BaseStoreRequest::class;

    /**
     * @var string $update_request_class
     */
    protected string $update_request_class      = BaseUpdateRequest::class;

    /**
     * @var string $show_request_class
     */
    protected string $show_request_class        = BaseShowRequest::class;

    /**
     * @var string $destroy_request_class
     */
    protected string $destroy_request_class     = BaseDestroyRequest::class;

    /**
     * @var BaseStoreRequest|null $store_request
     */
    protected ?BaseStoreRequest $store_request = null;

    /**
     * @var BaseUpdateRequest|null $update_request
     */
    protected ?BaseUpdateRequest $update_request = null;

    /**
 * @var BaseShowRequest|null
 */
    protected ?BaseShowRequest $show_request = null;

    /**
     * @var BaseDestroyRequest|null
     */
    protected ?BaseDestroyRequest $destroy_request = null;

    /**
     * @return FormRequest
     */
    public function makeStoreRequest() : FormRequest
    {
        return ( $this->store_request = $this->store_request ?? $this->makeRequest( $this->store_request_class ) );
    }

    /**
     * @return FormRequest
     */
    public function makeUpdateRequest() : FormRequest
    {
        return ( $this->update_request = $this->update_request ?? $this->makeRequest( $this->update_request_class ) );
    }

    /**
     * @return FormRequest
     */
    public function makeShowRequest() : FormRequest
    {
        return ( $this->show_request = $this->show_request ?? $this->makeRequest( $this->show_request_class ) );
    }

    /**
     * @return FormRequest
     */
    public function makeDestroyRequest() : FormRequest
    {
        return ( $this->destroy_request = $this->destroy_request ?? $this->makeRequest( $this->destroy_request_class ) );
    }

    /**
     * @param string $request_class
     *
     * @return FormRequest
     */
    public function makeRequest( string $request_class ) : FormRequest
    {
        return App::make( $request_class );
    }

    /**
     * @return string
     */
    public function getLastSegment() : string
    {
        return Arr::last(request()->segments());
    }

}
