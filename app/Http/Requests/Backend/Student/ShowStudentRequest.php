<?php

namespace App\Http\Requests\Backend\Student;

use App\Http\Requests\Request;

/**
 * Class ShowUserRequest.
 */
class ShowStudentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('show-student');
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
