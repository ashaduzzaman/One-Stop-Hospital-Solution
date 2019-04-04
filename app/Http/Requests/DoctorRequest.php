<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->doctor->id;
        $rules = [
            'name'=> 'required|string|max:50',
            'salary'=> 'required',
            'phone'=> 'required|max:11',
            'workarea'=> 'required'
        ];

        
        
        if($this->isMethod('put')){
            
            $rules['email'] = "required|email|unique:doctors,email,$id";
        }
        else{
            
            $rules['email'] = 'required|email|unique:doctors';
        }

        return $rules;
        
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Name is required',
    //         'email.required' => 'Email is required',
    //         'email.email' => 'Email already exist!',
    //         'salary.required' => 'Salary is required',
    //         'phone.required' => 'Phone is required',
    //         'workarea.required' => 'Workarea is required'

    //     ];
    // }
}
