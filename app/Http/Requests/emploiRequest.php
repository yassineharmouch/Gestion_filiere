<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class emploiRequest extends FormRequest
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
            'jour' => 'required|min:5',
            
            'Anneés_scolaire' => 'required|min:4',
        ];
    }
}
