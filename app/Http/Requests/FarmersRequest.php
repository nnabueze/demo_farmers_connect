<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FarmersRequest extends Request
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
            'full_name' => 'required|min:3',
            /*'date_of_birth'=>'required|date_format:Y-m-d', */          
           /* 'image'=>'required|mimes:jpeg,bmp,png,jpg',*/          
            'email'=>'required|email',
            'phone'=>'required|digits:11',           
            'latitude'=>'numeric|required',
            'gender'=>'required',
            'state'=>'required',
            'lga'=>'required',
            'village'=>'required',
            'farm_size'=>'required|numeric',
            'no_of_pack'=>'required|numeric',
            'crop_type'=>'required',
            'longitude'=>'numeric|required'
        ];
    }
}
