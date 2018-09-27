<?php

namespace App\Http\Requests\Backend\Guardian;

use App\Http\Requests\Request;

/**
 * Class ShowUserRequest.
 */
class ShowGuardianRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('show-guardian');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
