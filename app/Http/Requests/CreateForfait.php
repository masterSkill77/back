<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateForfait extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'illustration_img' => 'required | png,jpeg,jpg',
            'forfait_name' => 'required|min:4|string',
            'typeData' => 'required',
            'limiteMax' => 'required',
            'price' => 'required|number',
            'extension' => 'requried',
            'durationUnit' => 'required',
            'priceUnit' => 'required'

        ];
    }
}
