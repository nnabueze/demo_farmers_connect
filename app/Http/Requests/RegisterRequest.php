<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
        return [
            //
            'surname' => 'required|min:3',
            'first_name' => 'required|min:3',
            'date_of_birth'=>'required|date_format:Y-m-d',
            'state_of_birth'=>'required',
            'image'=>'required|mimes:jpeg,bmp,png,jpg',
            'contact_address'=>'required',
            'email'=>'required|email',
            'contact_phone'=>'required|digits:11',
            'BBM_pin'=>'min:8|max:8',
            'height'=>'numeric',
            'weight'=>'numeric',
            'waist'=>'numeric',
            'burst'=>'numeric',
            'hip'=>'numeric',
            'language_speaking'=>'required'
        ];
    }
}
