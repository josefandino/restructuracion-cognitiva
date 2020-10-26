<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThoughtRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uno'       => ['required', 'min:5', 'max:400'],
            'dos'       => ['required', 'min:5', 'max:400'],
            'tres'      => ['required', 'min:5', 'max:400'],
            'cuatro'    => ['required', 'min:5', 'max:400'],
            'cinco'     => ['required', 'min:5', 'max:400'],
            'seis'      => ['required', 'min:5', 'max:400'],
        ];
    }
}
