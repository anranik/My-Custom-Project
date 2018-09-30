<?php

namespace App\Http\Requests\Backend\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('store-teacher');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'qualification' => 'required',
            'designation' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'email' => 'required|unique:students|unique:teachers|unique:users|unique:guardians',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            //The Custom messages would go in here
            //For Example : 'title.required' => 'You need to fill in the title field.'
            //Further, see the documentation : https://laravel.com/docs/5.4/validation#customizing-the-error-messages
        ];
    }
}
