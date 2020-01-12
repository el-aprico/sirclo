<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightRequest extends FormRequest
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
        if ($this->_method !== 'PUT') {
            $this->id = 0;
        }
        return [
            'tanggal' => 'required|date|unique:weights,tanggal,'.$this->id,
            'min' => 'required|integer',
            'max' => 'required|integer'
        ];
    }
}
