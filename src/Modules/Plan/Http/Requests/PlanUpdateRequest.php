<?php

namespace Modules\Plan\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\BaseUpdateRequest;

class PlanUpdateRequest extends BaseUpdateRequest
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
                    ->ignore( $this->route('plan') )
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
