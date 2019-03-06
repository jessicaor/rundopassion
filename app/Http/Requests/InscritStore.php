<?php

namespace App\Http\Requests;

use App\Http\Requests\InscritStore;
use Illuminate\Foundation\Http\FormRequest;

class InscritStore extends FormRequest
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
            
                'name' => 'required|min:2|string',
                'firstname' => 'required|min:2|string',
                'age' => 'required|integer',
                'phone' => 'required'
        ];
    }
}
