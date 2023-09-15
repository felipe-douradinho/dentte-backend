<?php

namespace Modules\Cash\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\BaseStoreRequest;

class CashStoreRequest extends BaseStoreRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'is_default' => [
                Rule::in( \Modules\Core\Enums\YesNoEnum::toValues() ),
                Rule::unique( (new \Modules\Cash\Entities\Cash())->getTable() )
                    ->where('is_default', \Modules\Core\Enums\YesNoEnum::YES->value)
            ],
        ];
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
