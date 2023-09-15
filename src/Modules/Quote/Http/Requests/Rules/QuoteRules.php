<?php

namespace Modules\Quote\Http\Requests\Rules;

use Illuminate\Validation\Rules\Enum;
use Modules\Core\Enums\YesNoEnum;
use Modules\Quote\Enums\QuoteDiscountTypeEnum;
use Modules\Quote\Enums\QuoteStatusEnum;

trait QuoteRules
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'patient_id'                    => 'integer|exists:referers,id',
            'title'                         => 'required',
            'date'                          => 'required|nullable|date',
            'status'                        => [new Enum(QuoteStatusEnum::class)],
            'total_original'                => 'required|numeric',
            'discount_type'                 => [new Enum(QuoteDiscountTypeEnum::class)],
            'discount'                      => 'required|numeric',
            'total_final'                   => 'required|numeric',
            'is_installments_enabled'       => [new Enum(YesNoEnum::class)],
            'print_odontogram_and_hof'      => [new Enum(YesNoEnum::class)],
            'print_just_total'              => [new Enum(YesNoEnum::class)],
            'gen_contract_on_approve'       => [new Enum(YesNoEnum::class)],
            'entry_value'                   => 'sometimes|numeric',
            'installments'                  => 'sometimes|integer',

            'quote_items'                                   => 'required|array',
            'quote_items.*.plan_id'                         => 'required|exists:plans,id',
            'quote_items.*.plan_expertise_procedure_id'     => 'required|exists:plan_expertise_procedures,id',
            'quote_items.*.user_id'                         => 'required|exists:users,id',
            'quote_items.*.tooth_id'                        => 'required|exists:teeth,id',
            'quote_items.*.price'                           => 'required|numeric',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'patient_id' => [
                'integer' => __('quote::validation.patient_id.integer'),
                'exists' => __('quote::validation.patient_id.exists'),
            ],

            'quote_items' => [
                'required' => __('quote::validation.quote_items.required'),
            ],
            'quote_items.*.plan_id' => [
                'required' => __('quote::validation.quote_items_plan_id.required'),
                'exists' => __('quote::validation.quote_items_plan_id.exists'),
            ],
            'quote_items.*.plan_expertise_procedure_id' => [
                'required' => __('quote::validation.quote_items_plan_expertise_procedure_id.required'),
                'exists' => __('quote::validation.quote_items_plan_expertise_procedure_id.exists'),
            ],
            'quote_items.*.user_id' => [
                'required' => __('quote::validation.user_id.required'),
                'exists' => __('quote::validation.quote_items_user_id.exists'),
            ],
            'quote_items.*.tooth_id' => [
                'required' => __('quote::validation.tooth_id.required'),
                'exists' => __('quote::validation.quote_items_tooth_id.exists'),
            ],
            'quote_items.*.price' => [
                'required' => __('quote::validation.price.required'),
                'exists' => __('quote::validation.quote_items_price.exists'),
            ],
        ];
    }
}
