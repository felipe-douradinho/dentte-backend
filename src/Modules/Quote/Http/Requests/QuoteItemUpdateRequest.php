<?php

namespace Modules\Quote\Http\Requests;

use Modules\Core\Http\Requests\BaseUpdateRequest;

class QuoteItemUpdateRequest extends BaseUpdateRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'quote_id'                        => 'integer|exists:quotes,id',
            'plan_id'                         => 'required|exists:plans,id',
            'plan_expertise_procedure_id'     => 'required|exists:plan_expertise_procedures,id',
            'user_id'                         => 'required|exists:users,id',
            'tooth_id'                        => 'required|exists:teeth,id',
            'price'                           => 'required|numeric',
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
