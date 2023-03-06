<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "fullname" => 'required|max:20',
            "phonenumber" => 'required|max:10',
            'email' => 'required|max:255|email',

        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Name is required',
            'fullname.max' => 'The length of fullname less to 2 chacracters',
            'phonenumber.required' => 'Phone number is required',
            'phonenumber.max' => 'Have to 10 numbers',
            'email.required' => 'Email is required',
            'email.email'=> "Unformat Email",
            'email.max' => "The length have to less 255 characters",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => false
          ], 422));
    }   
    
}
