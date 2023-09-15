<?php

namespace Modules\Core\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class BaseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare or sanitize the data for validation before you apply your validation rules
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        //$this->merge([
        //    'slug' => Str::slug($this->slug),
        //]);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [ ];
        //return [
        //    'email' => 'email address',
        //];
    }
}
