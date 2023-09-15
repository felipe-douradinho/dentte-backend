<?php

namespace Modules\Stock\Http\Requests;

use Modules\Core\Http\Requests\BaseUpdateRequest;

class StockUpdateRequest extends BaseUpdateRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        //return [
        //    //
        //];

        return parent::rules();
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        //return true;

        return parent::authorize();
    }
}
