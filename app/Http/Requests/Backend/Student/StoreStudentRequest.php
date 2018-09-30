<?php

namespace App\Http\Requests\Backend\Student;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('store-student');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //Put your rules for the request in here
            'name' => 'required',
             'gender' => 'required',
             'section' => 'required',
             'previous_school' => 'required',
             'birthday' => 'required',
             'phone' => 'required',
             'class' => 'required',
             'roll' => 'required',
             'guardian_id' => 'required',
             'present_address' => 'required',
             'permanent_address' => 'required',
             'email' => 'required|unique:students|unique:teachers|unique:users|unique:guardians',
             'password' => 'required',
            //Further, see the documentation : https://laravel.com/docs/5.4/validation#creating-form-requests
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
