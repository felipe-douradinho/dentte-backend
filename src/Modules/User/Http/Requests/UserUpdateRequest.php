<?php

namespace Modules\User\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\BaseUpdateRequest;
use Modules\User\Entities\User;

class UserUpdateRequest extends BaseUpdateRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return array_merge(parent::rules(), [
            'email' => Rule::unique(env('DB_CONNECTION_AUTH') . '.' . (new User())->getTable())
                ->ignore( request()->route()->user ),
        ]);
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
