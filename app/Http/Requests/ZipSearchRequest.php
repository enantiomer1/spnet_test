<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZipSearchRequest extends FormRequest
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
            'zipcode' => 'required|size:5',
            'search_radius' => 'required|max:200',
        ];
    }
}
