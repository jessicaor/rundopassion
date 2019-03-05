<?php

namespace App\Http\Requests;

use App\Http\Requests\RandoStore;
use Illuminate\Foundation\Http\FormRequest;

class RandoStore extends FormRequest
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
            'title' => 'required|min:4|string',
            'date' => 'required|min:2|integer',
            'heure' => 'required|min:1|integer',
            'distance' => 'required|min:1|integer',
            'description' => 'required|min:10|string',
            'state' =>'boolean'
        ];
    }
}
