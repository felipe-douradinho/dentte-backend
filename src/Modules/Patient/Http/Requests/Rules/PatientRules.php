<?php

namespace Modules\Patient\Http\Requests\Rules;

use Illuminate\Validation\Rule;
use Modules\Core\Enums\GenderEnum;
use Modules\Core\Http\Requests\BaseStoreRequest;

class PatientRules extends BaseStoreRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'referer_id'    => 'integer|exists:referers,id',
            'name'          => 'required|max:255',
            'gender'        => Rule::in( GenderEnum::toValues() ),
            'birth'         => 'sometimes|nullable|date',
            'email'         => 'sometimes|nullable|email|max:255',
            'chart_number'  => 'sometimes|nullable|max:255',
            //'notes'         => 'sometimes|nullable',

            'patient_documents'         => 'required|array',
            'patient_documents.*.name'  => 'required|max:255',
            'patient_documents.*.value' => 'required|max:255',

            'patient_phones'            => 'sometimes|array',
            'patient_phones.*.number'   => 'required|max:50',

            'patient_sponsor'                       => 'sometimes|array',
            'patient_sponsor.name'                  => 'required',
            'patient_sponsor.document_type'         => 'required|max:20',
            'patient_sponsor.document_number'       => 'required',
            'patient_sponsor.birth'                 => 'sometimes|nullable|date',
            'patient_sponsor.phone'                 => 'max:50',

            'patient_address'               => 'sometimes|array',
            'patient_address.city_id'       => 'required|integer|exists:cities,id',
            'patient_address.address'       => 'sometimes',
            'patient_address.number'        => 'sometimes',
            'patient_address.complement'    => 'sometimes',
            'patient_address.neighborhood'  => 'sometimes',
            'patient_address.zip_code'      => 'sometimes|numeric|max:99999999',

            'patient_plan'                          => 'sometimes|array',
            'patient_plan.plan_id'                  => 'required|integer|exists:plans,id',
            'patient_plan.number'                   => 'sometimes',
            'patient_plan.sponsor_name'             => 'sometimes',
            'patient_plan.sponsor_document_type'    => 'sometimes',
            'patient_plan.sponsor_document_number'  => 'sometimes',
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
            'referer_id' => [
                'integer' => __('patient::validation.referer_id.integer'),
                'exists' => __('patient::validation.referer_id.exists'),
            ],

            'patient_documents' => [
                'required' => __('patient::validation.patient_documents.required'),
            ],
            'patient_documents.*.name' => [
                'required' => __('patient::validation.patient_documents_name.required'),
            ],
            'patient_documents.*.value' => [
                'required' => __('patient::validation.patient_documents_value.required'),
            ],

            'patient_phones.*.number' => [
                'required' => __('patient::validation.patient_phones_number.required'),
            ],

            'patient_sponsor.name' => [
                'required' => __('patient::validation.patient_sponsor_nome.required'),
            ],
            'patient_sponsor.document_type' => [
                'required' => __('patient::validation.patient_sponsor_document_type.required'),
            ],
            'patient_sponsor.document_number' => [
                'required' => __('patient::validation.patient_sponsor_document_number.required'),
            ],

            'patient_plan.plan_id' => [
                'required'  => __('patient::validation.patient_plan_plan_id.required'),
                'exists'    => __('patient::validation.patient_plan_plan_id.exists'),
            ],
        ];
    }
}
